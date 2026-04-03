<?php

declare(strict_types=1);

namespace Owlookit\Tiptoppay;

final class WebhookSignature
{
    public static function isValid(string $rawBody, string $secret, string $signature): bool
    {
        if ($secret === '' || $signature === '') {
            return false;
        }

        $calculated = base64_encode(hash_hmac('sha256', $rawBody, $secret, true));

        return hash_equals($calculated, $signature);
    }
}