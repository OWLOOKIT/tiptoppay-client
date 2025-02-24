<?php

namespace Owlookit\Tiptoppay\Request;

use Owlookit\Tiptoppay\BaseRequest;

/**
 * Class TokenPayment
 * @package Owlookit\Tiptoppay\CardPayment
 * @see https://developers.tiptoppay.kz/#oplata-po-tokenu-rekarring
 */
class TokenPayment extends BaseRequest
{
    /**
     * @var int|float
     */
    public         $amount;
    public string  $currency;
    public string  $accountId;
    public string  $token;
    public ?string $invoiceId;
    public ?string $description;
    public ?string $ipAddress;
    public ?string $email;
    public ?string $jsonData;
    public int     $trInitiatorCode;

    /**
     * TokenPayment constructor.
     * @param $amount
     * @param string $currency
     * @param string $accountId
     * @param string $token
     */
    public function __construct($amount, string $currency, string $accountId, string $token, int $initiator)
    {
        $this->amount          = $amount;
        $this->currency        = $currency;
        $this->accountId       = $accountId;
        $this->token           = $token;
        $this->trInitiatorCode = $initiator;
    }
}
