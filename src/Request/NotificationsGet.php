<?php

namespace Owlookit\Tiptoppay\Request;

use Owlookit\Tiptoppay\BaseRequest;

/**
 * Class NotificationsGet
 * @package Owlookit\Tiptoppay\CardPayment
 * @see https://developers.tiptoppay.kz/#prosmotr-tranzaktsii
 */
class NotificationsGet extends BaseRequest
{
    public int $TransactionId;

    public function __construct(int $transactionId)
    {
        $this->TransactionId = $transactionId;
    }
}
