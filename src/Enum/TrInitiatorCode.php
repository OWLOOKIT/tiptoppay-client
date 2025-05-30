<?php

namespace Owlookit\Tiptoppay\Enum;

use MyCLabs\Enum\Enum;

/**
 * Признак инициатора списания денежных средств.
 *
 * @see https://developers.tiptoppay.kz/#oplata-po-tokenu-rekarring
 */
class TrInitiatorCode extends Enum
{
    /**
     * Транзакция инициирована ТСП на основе ранее сохраненных учетных данных
     */
    public const SAVED_CREDENTIALS = 0;

    /**
     * Транзакция инициирована держателем карты (клиентом) на основе ранее сохраненных учетных данных
     */
    public const BY_CARDHOLDER = 1;
}
