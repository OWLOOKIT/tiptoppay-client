<?php

declare(strict_types=1);

namespace Owlookit\Tiptoppay;

use ReflectionClass;
use ReflectionNamedType;
use ReflectionProperty;

class BaseHook
{
    /**
     * @var array<string, mixed>
     */
    protected array $request;

    /**
     * @param array<string, mixed> $request
     */
    public function __construct(array $request)
    {
        $this->request = $request;
        $this->fill();
    }

    /**
     * @return array<string, mixed>
     */
    public function getRequest(): array
    {
        return $this->request;
    }

    private function fill(): void
    {
        $reflection = new ReflectionClass($this);

        foreach ($reflection->getProperties(ReflectionProperty::IS_PUBLIC | ReflectionProperty::IS_PROTECTED) as $property) {
            $key = $property->getName();

            if ($key === 'request') {
                continue;
            }

            $requestValue = $this->resolveRequestValue($key);

            if ($requestValue === null) {
                continue;
            }

            $this->{$key} = $this->castValueForProperty($property, $requestValue);
        }
    }

    private function resolveRequestValue(string $property): mixed
    {
        $candidates = [
            $property,
            ucfirst($property),
            $this->camelToSnake($property),
            strtoupper($property[0]) . substr($property, 1),
        ];

        foreach ($candidates as $candidate) {
            if (array_key_exists($candidate, $this->request)) {
                return $this->request[$candidate];
            }
        }

        return null;
    }

    private function castValueForProperty(ReflectionProperty $property, mixed $value): mixed
    {
        $type = $property->getType();

        if (!$type instanceof ReflectionNamedType) {
            return $value;
        }

        $typeName = $type->getName();

        if ($value === null) {
            return null;
        }

        return match ($typeName) {
            'bool' => $this->castToBool($value),
            'int' => $this->castToInt($value),
            'float' => $this->castToFloat($value),
            'string' => $this->castToString($value),
            'array' => is_array($value) ? $value : [$value],
            default => $value,
        };
    }

    private function castToBool(mixed $value): bool
    {
        if (is_bool($value)) {
            return $value;
        }

        if (is_int($value) || is_float($value)) {
            return $value !== 0;
        }

        if (is_string($value)) {
            $normalized = mb_strtolower(trim($value));

            return in_array($normalized, ['1', 'true', 'yes', 'on'], true);
        }

        return (bool) $value;
    }

    private function castToInt(mixed $value): int
    {
        if (is_bool($value)) {
            return $value ? 1 : 0;
        }

        return (int) $value;
    }

    private function castToFloat(mixed $value): float
    {
        return (float) $value;
    }

    private function castToString(mixed $value): string
    {
        if (is_array($value)) {
            return json_encode($value, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES) ?: '';
        }

        if (is_bool($value)) {
            return $value ? 'true' : 'false';
        }

        return (string) $value;
    }

    private function camelToSnake(string $value): string
    {
        return (string) preg_replace('/(?<!^)[A-Z]/', '_$0', $value);
    }
}