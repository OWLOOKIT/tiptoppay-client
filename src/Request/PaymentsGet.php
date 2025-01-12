<?php

namespace Owlookit\Tiptoppay\Request;

use Owlookit\Tiptoppay\BaseRequest;

/**
 * Class PaymentsGet
 * @package Owlookit\Tiptoppay\CardPayment
 * @see https://developers.tiptoppay.kz/#prosmotr-tranzaktsii
 *
 */
class PaymentsGet extends BaseRequest
{
    public int $transactionId;

    /**
     * PaymentsGet constructor.
     * @param int $transactionId
     */
    public function __construct(int $transactionId)
    {
        $this->transactionId = $transactionId;
    }
}
