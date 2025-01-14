<?php

namespace Owlookit\Tiptoppay\Request;

use Owlookit\Tiptoppay\BaseRequest;

/**
 * Class SubscriptionCancel
 * @package Owlookit\Tiptoppay\Request
 * @see https://developers.tiptoppay.kz/#otmena-podpiski-na-rekurrentnye-platezhi
 */
class SubscriptionCancel extends BaseRequest
{
    public string  $id;

    public function __construct(string $id)
    {
        $this->id = $id;
    }
}
