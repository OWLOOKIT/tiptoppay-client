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
    /** @var int|float */
    public int|float $amount;
    public string $accountId;
    public string $currency;
    public string $ipAddress;
    public ?string $email;
    public ?string $paymentUrl;
    public ?string $invoiceId;
    public ?string $description;
    public ?string $cultureName;
    public ?string $jsonData;
    public ?array $payer;
    public ?array $receiver;

    public function __construct(
        string $cardCryptogramPacket,
        int|float $amount,
        string $accountId,
        string $currency,
        string $ipAddress,
        string $name = '',
        ?string $paymentUrl = null,
        ?string $invoiceId = null,
        ?string $description = null,
        ?string $cultureName = null,
        ?string $email = null,
        ?string $jsonData = null,
        ?array $payer = null,
        ?array $receiver = null
    ) {
        $this->cardCryptogramPacket = $cardCryptogramPacket;
        $this->amount               = $amount;
        $this->accountId            = $accountId;
        $this->currency             = $currency;
        $this->ipAddress            = $ipAddress;
        $this->name                 = $name;
        $this->paymentUrl           = $paymentUrl;
        $this->invoiceId            = $invoiceId;
        $this->description          = $description;
        $this->cultureName          = $cultureName;
        $this->email                = $email;
        $this->jsonData             = $jsonData;
        $this->payer                = $payer;
        $this->receiver             = $receiver;
    }
}
