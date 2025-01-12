<?php

namespace Owlookit\Tiptoppay\Request;

use Owlookit\Tiptoppay\BaseRequest;
use Owlookit\Tiptoppay\Exceptions\BadTypeException;

/**
 * Class OrderCreate
 * @package Owlookit\Tiptoppay\Request
 * @see https://developers.tiptoppay.kz/#sozdanie-scheta-dlya-otpravki-po-pochte
 */
class OrderCreate extends BaseRequest
{
    /**
     * @var int|float
     */
    public         $amount;
    public string  $currency;
    public string  $description;
    public ?string $email;
    public ?bool   $requireConfirmation;
    public ?bool   $sendEmail;
    public ?string $invoiceId;
    public ?string $accountId;
    public ?string $offerUri;
    public ?string $phone;
    public ?bool   $sendSms;
    public ?bool   $sendViber;
    public ?string $cultureName;
    public ?string $subscriptionBehavior;
    public ?string $successRedirectUrl;
    public ?string $failRedirectUrl;
    public ?string $jsonData;

    /**
     * OrderCreate constructor.
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
    }
}
