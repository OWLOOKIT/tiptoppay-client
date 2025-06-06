<?php

namespace Owlookit\Tiptoppay\Hook;

use Owlookit\Tiptoppay\BaseHook;

/**
 * Class HookCancel
 * @link https://developers.tiptoppay.kz/#cancel
 */
class HookCancel extends BaseHook
{
    // Required

    public ?int    $transactionId = null;
    public ?float  $amount        = null;
    public ?string $dateTime      = null;

    // Not required

    public ?string $invoiceId = null;
    public ?string $accountId = null;
    public ?string $email     = null;
    public ?string $data      = null;
}
