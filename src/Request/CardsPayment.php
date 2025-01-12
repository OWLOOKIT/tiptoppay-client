<?php

namespace Owlookit\Tiptoppay\Request;

use Owlookit\Tiptoppay\BaseRequest;
use Owlookit\Tiptoppay\Exceptions\BadTypeException;

/**
 * Class CardsPayment
 * @package Owlookit\Tiptoppay\CardPayment
 * @see https://developers.tiptoppay.kz/#oplata-po-kriptogramme
 */
class CardsPayment extends BaseRequest
{
    /**
     * @var int|float
     */
    public         $amount;
    public string  $currency;
    public string  $ipAddress;
    public ?string $name;
    public string  $cardCryptogramPacket;
    public ?string $paymentUrl;
    public ?string $invoiceId;
    public ?string $description;
    public ?string $cultureName;
    public ?string $accountId;
    public ?string $email;
    public ?array  $payer;
    public ?string $jsonData;

    /**
     * CardsPayment constructor.
     * @param $amount
     * @param string $currency
     * @param string $ipAddress
     * @param string $cardCryptogramPacket
     * @throws BadTypeException
     */
    public function __construct($amount, string $currency, string $ipAddress, string $cardCryptogramPacket)
    {
        if (!is_numeric($amount)) {
            throw new BadTypeException('Amount isn\'t numeric');
        }

        $this->amount               = $amount;
        $this->currency             = $currency;
        $this->ipAddress            = $ipAddress;
        $this->cardCryptogramPacket = $cardCryptogramPacket;
    }
}
