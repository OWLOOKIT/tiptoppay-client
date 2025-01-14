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

    public function __construct(
        string  $type,
        ?bool   $isEnabled          = null,
        ?string $address            = null,
        ?string $httpMethod         = null,
        ?string $encoding           = null,
        ?string $format             = null
    ) {
        $this->type       = $type;
        $this->isEnabled  = $isEnabled;
        $this->address    = $address;
        $this->httpMethod = $httpMethod;
        $this->encoding   = $encoding;
        $this->format     = $format;
    }
}
