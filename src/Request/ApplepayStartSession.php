<?php

namespace Owlookit\Tiptoppay\Request;

use Owlookit\Tiptoppay\BaseRequest;
use Owlookit\Tiptoppay\Exceptions\BadTypeException;

/**
 * Class ApplepayStartSession
 * @package Owlookit\Tiptoppay\CardPayment
 * @see https://developers.tiptoppay.kz/#zapusk-sessii-dlya-oplaty-cherez-apple-pay
 */
class ApplepayStartSession extends BaseRequest
{
    public string  $validationUrl;
    public ?string $paymentUrl;

    /**
     * ApplepayStartSession constructor.
     * @param string $validationUrl
     * @param string|null $paymentUrl
     * @throws BadTypeException
     */
    public function __construct(string $validationUrl, ?string $paymentUrl = null)
    {
        if (filter_var($validationUrl, FILTER_VALIDATE_URL) === false) {
            throw new BadTypeException('Validation url is wrong');
        }

        $this->validationUrl = $validationUrl;

        if ($paymentUrl) {
            if (filter_var($paymentUrl, FILTER_VALIDATE_URL) === false) {
                throw new BadTypeException('Payment url is wrong');
            }

            $this->paymentUrl = $paymentUrl;
        }
    }
}
