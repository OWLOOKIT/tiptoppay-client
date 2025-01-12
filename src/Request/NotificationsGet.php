<?php

namespace Owlookit\Tiptoppay\Request;

use Owlookit\Tiptoppay\BaseRequest;

/**
 * Class NotificationsGet
 * @package Owlookit\Tiptoppay\CardPayment
 * @see https://developers.tiptoppay.kz/#prosmotr-tranzaktsii
 */
class NotificationsGet extends BaseRequest
{
    /**
     * @see https://developers.tiptoppay.kz/#tipy-operatsiy
     * @var string
     */
    public string $type;
}
