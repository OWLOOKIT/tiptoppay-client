<?php

namespace Owlookit\Tiptoppay\Request;

use Owlookit\Tiptoppay\BaseRequest;
use Owlookit\Tiptoppay\Exceptions\BadTypeException;

/**
 * Class PaymentsRefund
 * @package Owlookit\Tiptoppay\Request
 * @see https://developers.tiptoppay.kz/#vozvrat-deneg
 */
class PaymentsRefund extends BaseRequest
{
    /**
     * @var int|float
     */
    public         $amount;
    public int     $transactionId;
    public ?string $jsonData;

    /**
     * PaymentsRefund constructor.
     * @param int $transactionId
     * @param $amount
     * @throws BadTypeException
     */
    public function __construct(int $transactionId, $amount)
    {
        if (!is_numeric($amount)) {
            throw new BadTypeException('Amount isn\'t numeric');
        }
        $this->amount        = $amount;
        $this->transactionId = $transactionId;
    }
}
