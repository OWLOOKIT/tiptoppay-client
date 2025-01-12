<?php

namespace Owlookit\Tiptoppay\Request\Receipt;

use Owlookit\Tiptoppay\BaseRequest;

/**
 * @see https://kassir.tiptoppay.kz/#amounts
 */
class ReceiptAmounts extends BaseRequest
{
    public ?string $electronic     = null;
    public ?string $advancePayment = null;
    public ?string $credit         = null;
    public ?string $provision      = null;
}
