<?php

namespace Owlookit\Tiptoppay\Request;

use Owlookit\Tiptoppay\BaseRequest;

/**
 * Class TokenTopUp
 * @package Owlookit\Tiptoppay\CardPayment
 * @see https://developers.tiptoppay.kz/#vyplata-po-tokenu
 */
class TokenTopUp extends BaseRequest
{
    public string  $token;
    /**
     * @var int|float
     */
    public         $amount;
    public string  $accountId;
    public string  $currency;
    public ?string $invoiceId;
    public ?array  $payer;
    public ?array  $receiver;
}
