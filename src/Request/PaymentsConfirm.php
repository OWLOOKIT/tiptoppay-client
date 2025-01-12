<?php

namespace Owlookit\Tiptoppay\Request;

use Owlookit\Tiptoppay\BaseRequest;
use Owlookit\Tiptoppay\Exceptions\BadTypeException;

/**
 * Class PaymentsConfirm
 * @package Owlookit\Tiptoppay\CardPayment
 * @see https://developers.tiptoppay.kz/#podtverzhdenie-oplaty
 *
 */
class PaymentsConfirm extends BaseRequest
{
    /**
     * @var int|float
     */
    public         $amount;
    public int     $transactionId;
    public ?string $jsonData;

    /**
     * PaymentsConfirm constructor.
     * @param int|float $amount
     * @param int $transactionId
     * @param string|null $jsonData
     * @throws BadTypeException
     */
    public function __construct($amount, int $transactionId, ?string $jsonData = null)
    {
        if (!is_numeric($amount)) {
            throw new BadTypeException('Amount isn\'t numeric');
        }

        $this->amount = $amount;
        $this->transactionId = $transactionId;

        if ($jsonData) {
            $this->jsonData = $jsonData;
        }
    }
}
