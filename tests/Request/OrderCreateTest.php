<?php

use Owlookit\Tiptoppay\Exceptions\BadTypeException;
use Owlookit\Tiptoppay\Request\OrderCreate;
use PHPUnit\Framework\TestCase;

/**
 * Class OrderCreateTest
 * @group Tiptoppay
 */
class OrderCreateTest extends TestCase
{
    /**
     * Проверяем валидацию для amount - успешный вариант
     */
    public function testCheckValidationAmountSuccessInt()
    {
        $amount      = 1;
        $currency    = 'KZT';
        $description = 'asdf';

        $orderCreateRequest = new OrderCreate($amount, $currency, $description);
        $this->assertEquals($amount, $orderCreateRequest->amount);
        $this->assertEquals($currency, $orderCreateRequest->currency);
        $this->assertEquals($description, $orderCreateRequest->description);
    }

    /**
     * Проверяем валидацию для amount - успешный вариант
     */
    public function testCheckValidationAmountSuccessFloat()
    {
        $amount      = 1.123;
        $currency    = 'KZT';
        $description = 'asdf';

        $orderCreateRequest = new OrderCreate($amount, $currency, $description);
        $this->assertEquals($amount, $orderCreateRequest->amount);
        $this->assertEquals($currency, $orderCreateRequest->currency);
        $this->assertEquals($description, $orderCreateRequest->description);
    }

    /**
     * Проверяем валидацию для amount - ожидаем ошибку
     */
    public function testCheckValidationAmountFailed()
    {
        $amount      = 'asdf';
        $currency    = 'KZT';
        $description = 'asdf';

        $this->expectException(BadTypeException::class);
        /* @phan-suppress-next-line PhanNoopNew */
        new OrderCreate($amount, $currency, $description);
    }
}
