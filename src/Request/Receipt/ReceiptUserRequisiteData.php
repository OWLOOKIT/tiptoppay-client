<?php

namespace Owlookit\Tiptoppay\Request\Receipt;

use Owlookit\Tiptoppay\BaseRequest;

class ReceiptUserRequisiteData extends BaseRequest
{
    public string $requisiteKey;
    public string $requisiteValue;

    public function __construct(string $key, string $value)
    {
        $this->requisiteKey   = $key;
        $this->requisiteValue = $value;
    }
}
