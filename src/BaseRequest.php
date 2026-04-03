<?php

declare(strict_types=1);

namespace Owlookit\Tiptoppay;

use MyCLabs\Enum\Enum;
use Owlookit\Tiptoppay\Enum\BoolField;

class BaseRequest
{
    /**
     * @return array<string, mixed>
     */
    public function asArray(): array
    {
        $data = [];

        foreach (get_object_vars($this) as $field => $value) {
            if ($value === null) {
                continue;
            }

            $key = ucfirst($field);
            $data[$key] = $this->normalizeValue($value);
        }

        return $data;
    }

    private function normalizeValue(mixed $value): mixed
    {
        if ($value === true) {
            return BoolField::TRUE;
        }

        if ($value === false) {
            return BoolField::FALSE;
        }

        if ($value instanceof BaseRequest) {
            return $value->asArray();
        }

        if ($value instanceof Enum) {
            return $value->getValue();
        }

        if (is_array($value)) {
            $normalized = [];

            foreach ($value as $itemKey => $itemValue) {
                $normalized[$itemKey] = $this->normalizeValue($itemValue);
            }

            return $normalized;
        }

        return $value;
    }
}