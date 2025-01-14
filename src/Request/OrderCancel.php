<?php

namespace Owlookit\Tiptoppay\Request;

use Owlookit\Tiptoppay\BaseRequest;

/**
 * Class OrderCancel
 * @package Owlookit\Tiptoppay\Request
 * @see https://developers.tiptoppay.kz/#otmena-sozdannogo-scheta
 */
class OrderCancel extends BaseRequest
{
    public string  $id;

    public function __construct(string $id)
    {
        $this->id = $id;
    }
}
