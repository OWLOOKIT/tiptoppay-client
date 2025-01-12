<?php

namespace Owlookit\Tiptoppay\Request;

use Owlookit\Tiptoppay\BaseRequest;

/**
 * Class PaymentsList
 * @package Owlookit\Tiptoppay\CardPayment
 * @see https://developers.tiptoppay.kz/#vygruzka-spiska-tranzaktsiy
 */
class PaymentsList extends BaseRequest
{
    /**
     * "Date":"2014-08-09"
     * @var string
     */
    public string $date;
    /**
     * https://developers.tiptoppay.kz/#kody-vremennyh-zon
     * @var string
     */
    public string $timeZone;

    public function __construct(string $date, ?string $timeZone = null)
    {
        $this->date = $date;

        if ($timeZone) {
            $this->timeZone = $timeZone;
        }
    }
}
