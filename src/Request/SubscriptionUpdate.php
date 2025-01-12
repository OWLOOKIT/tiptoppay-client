<?php

namespace Owlookit\Tiptoppay\Request;

use DateTime;
use Owlookit\Tiptoppay\BaseRequest;

/**
 * Class SubscriptionUpdate
 * @package Owlookit\Tiptoppay\Request
 * @see https://developers.tiptoppay.kz/#izmenenie-podpiski-na-rekurrentnye-platezhi
 */
class SubscriptionUpdate extends BaseRequest
{
    public string  $id;
    public ?string $description;
    /**
     * @var int|float
     */
    public         $amount;
    public ?string $currency;
    public ?bool   $requireConfirmation;
    /**
     * "startDate":"2014-08-06T16:46:29.5377246Z",
     * @var DateTime|null
     */
    public ?DateTime $startDate;
    public ?string   $interval;
    public ?int      $period;
    public ?int      $maxPeriods;
    public ?string   $customerReceipt;
    public ?string   $cultureName;
}
