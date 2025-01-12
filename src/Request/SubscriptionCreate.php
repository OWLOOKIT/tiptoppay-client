<?php

namespace Owlookit\Tiptoppay\Request;

use DateTime;
use Owlookit\Tiptoppay\BaseRequest;

/**
 * Class SubscriptionCreate
 * @package Owlookit\Tiptoppay\Request
 * @see https://developers.tiptoppay.kz/#sozdanie-podpiski-na-rekurrentnye-platezhi
 */
class SubscriptionCreate extends BaseRequest
{
    public string  $token;
    public string  $accountId;
    public string  $description;
    public string  $email;
    /**
     * @var int|float
     */
    public             $amount;
    public string      $currency;
    public bool        $requireConfirmation;
    /**
     * "startDate":"2014-08-06T16:46:29.5377246Z",
     * @var DateTime
     */
    public DateTime    $startDate;
    public string      $interval;
    public int         $period;
    public ?int        $maxPeriods;
    public ?string     $customerReceipt;
}
