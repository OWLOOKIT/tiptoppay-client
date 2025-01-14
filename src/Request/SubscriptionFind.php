<?php

namespace Owlookit\Tiptoppay\Request;

use Owlookit\Tiptoppay\BaseRequest;

/**
 * Class SubscriptionFind
 * @package Owlookit\Tiptoppay\Request
 * @see https://developers.tiptoppay.kz/#poisk-podpisok
 *
 */
class SubscriptionFind extends BaseRequest
{
    public string $accountId;

    public function __construct(string $accountId)
    {
        $this->accountId = $accountId;
    }
}
