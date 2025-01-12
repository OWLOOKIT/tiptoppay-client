<?php

namespace Owlookit\Tiptoppay\Request;

use Owlookit\Tiptoppay\BaseRequest;

/**
 * Class NotificationsUpdate
 * @package Owlookit\Tiptoppay\CardPayment
 * @see https://developers.tiptoppay.kz/#izmenenie-nastroek-uvedomleniy
 */
class NotificationsUpdate extends BaseRequest
{
    /**
     * @see https://developers.tiptoppay.kz/#tipy-operatsiy
     * @var string
     */
    public string  $type;
    public ?bool   $isEnabled;
    public ?string $address;
    public ?string $httpMethod;
    public ?string $encoding;
    public ?string $format;
}
