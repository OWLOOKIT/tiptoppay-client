<?php

namespace Owlookit\Tiptoppay\Request\Receipt;

use Owlookit\Tiptoppay\BaseRequest;

/**
 * @see https://kassir.tiptoppay.kz/#agentdata
 */
class ReceiptItemAgentData extends BaseRequest
{
    public ?string $agentOperationName           = null;
    public ?string $paymentAgentPhone            = null;
    public ?string $paymentReceiverOperatorPhone = null;
    public ?string $transferOperatorPhone        = null;
    public ?string $transferOperatorName         = null;
    public ?string $transferOperatorAddress      = null;
    public ?string $transferOperatorInn          = null;
}
