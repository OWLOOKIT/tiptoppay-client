<?php

declare(strict_types=1);

namespace Owlookit\Tiptoppay;

final class BaseHook
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
        $modelFields = array_keys(get_object_vars($this));

        foreach ($modelFields as $key) {
            if ($key === 'request') {
                continue;
            }

            $requestValue = $this->resolveRequestValue($key);

            if ($requestValue !== null) {
                $this->{$key} = $requestValue;
            }
        }
    }

    private function resolveRequestValue(string $property): mixed
    {
        $candidates = [
            $property,
            ucfirst($property),
            $this->camelToSnake($property),
            strtoupper(substr($property, 0, 1)) . substr($property, 1),
        ];

        foreach ($candidates as $candidate) {
            if (array_key_exists($candidate, $this->request)) {
                return $this->request[$candidate];
            }
        }

        return null;
    }

    private function camelToSnake(string $value): string
    {
        return (string) preg_replace('/(?<!^)[A-Z]/', '_$0', $value);
    }
}