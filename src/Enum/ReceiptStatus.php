<?php

namespace Owlookit\Tiptoppay\Enum;

use MyCLabs\Enum\Enum;

/**
 * Статус чека
 *
 * @see https://kassir.tiptoppay.kz/#zapros-statusa-cheka
 */
class ReceiptStatus extends Enum
{
    public const STATUS_PROCESSED = 'Processed';
    public const STATUS_NOTFOUND  = 'NotFound';
    public const STATUS_ERROR     = 'Error';
    public const STATUS_QUEUED    = 'Queued';

}