<?php

namespace Owlookit\Tiptoppay\Hook;

use Owlookit\Tiptoppay\BaseHook;

/**
 * Class HookRefund
 * @link https://developers.tiptoppay.kz/#refund
 */
class HookRefund extends BaseHook
{
    // Required

    public ?int    $transactionId        = null;
    public ?int    $paymentTransactionId = null;
    public ?float  $amount               = null;
    public ?string $dateTime             = null;
    public ?string $operationType        = null;

    // Not required

    public ?string $invoiceId = null;
    public ?string $accountId = null;
    public ?string $email     = null;
    public ?string $data      = null;
}
