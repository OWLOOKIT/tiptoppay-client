<?php

namespace Owlookit\Tiptoppay\Request;

use Owlookit\Tiptoppay\BaseRequest;

/**
 * Class PaymentsFind
 * @package Owlookit\Tiptoppay\CardPayment
 * @see https://developers.tiptoppay.kz/#proverka-statusa-platezha
 */
class PaymentsFind extends BaseRequest
{
    public string $invoiceId;

    /**
     * PaymentsFind constructor.
     * @param string $invoiceId
     */
    public function __construct(string $invoiceId)
    {
        $this->invoiceId = $invoiceId;
    }
}
