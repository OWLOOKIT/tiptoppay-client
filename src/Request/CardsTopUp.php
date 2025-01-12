<?php

namespace Owlookit\Tiptoppay\Request;

use Owlookit\Tiptoppay\BaseRequest;

/**
 * Class CardsTopUp
 * @package Owlookit\Tiptoppay\CardPayment
 * @see https://developers.tiptoppay.kz/#oplata-po-kriptogramme
 */
class CardsTopUp extends BaseRequest
{
    public string $name;
    public string $cardCryptogramPacket;
    /**
     * @var int|float
     */
    public         $amount;
    public string  $accountId;
    public string  $currency;
    public ?string $email;
    public ?string $jsonData;
    public ?string $invoiceId;
    public ?string $description;
    public ?array  $payer;
    public ?array  $receiver;
}
