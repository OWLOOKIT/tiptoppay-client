<?php

namespace Owlookit\Tiptoppay\Request;

use Owlookit\Tiptoppay\BaseRequest;

/**
 * Class TokenList
 * @package Owlookit\Tiptoppay\CardPayment
 * @see https://developers.tiptoppay.kz/#vygruzka-tokenov
 *
 */
class TokenList extends BaseRequest
{
    public int $PageNumber;

    public function __construct(int $pageNumber)
    {
        $this->PageNumber = $pageNumber;
    }
}
