<?php

namespace Owlookit\Tiptoppay\Request;

use Owlookit\Tiptoppay\BaseRequest;

/**
 * Class SubscriptionGet
 * @package Owlookit\Tiptoppay\Request
 * @see https://developers.tiptoppay.kz/#zapros-informatsii-o-podpiske
 *
 */
class SubscriptionGet extends BaseRequest
{
    public string  $id;
}
