<?php

namespace Owlookit\Tiptoppay\Response\Models;

/**
 * Class TransactionWith3dsModel
 * @package Owlookit\Tiptoppay\Response\Models
 */
class TransactionWith3dsModel extends TransactionModel
{
    public ?string $paReq  = null;
    public ?string $acsUrl = null;
}
