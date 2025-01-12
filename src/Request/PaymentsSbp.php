<?php

namespace Owlookit\Tiptoppay\Request;

use Owlookit\Tiptoppay\BaseRequest;
use Owlookit\Tiptoppay\Exceptions\BadTypeException;

/**
 * Class PaymentsSbp
 * @see https://developers.tiptoppay.kz/#sbp
 *
 */
abstract class PaymentsSbp extends BaseRequest
{
    /**
     * @var int|float
     */
    public         $amount;
    public string  $currency;
    public string  $description;
    public string  $scheme;
    public ?string $accountId;
    public ?string $email;
    public ?string $jsonData;
    public ?string $invoiceId;
    public ?string $ipAddress;
    public ?string $successRedirectUrl;
    public ?string $failRedirectUrl;
    public ?int    $ttlMinutes;

    /**
     * PaymentsSbpLink constructor.
     * @param $amount
     * @param string $currency
     * @param string $description
     * @throws BadTypeException
     */
    public function __construct($amount, string $currency, string $description)
    {
        if (!is_numeric($amount)) {
            throw new BadTypeException('Amount isn\'t numeric');
        }
        $this->amount      = $amount;
        $this->currency    = $currency;
        $this->description = $description;
        $this->scheme      = 'charge';
    }
}
