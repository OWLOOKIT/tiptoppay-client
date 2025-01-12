<?php

namespace Owlookit\Tiptoppay\Enum;

use MyCLabs\Enum\Enum;

/**
 * Язык уведомлений после ссылки на оплату
 * https://kassir.tiptoppay.kz/#agentsign
 *
 * @see Enum
 */
class CultureName extends Enum
{
    /**
     * Русский
     * @var string
     */
    public const RU = 'ru-RU';
    /**
     * Английский
     * @var string
     */
    public const EN = 'en-US';

}
