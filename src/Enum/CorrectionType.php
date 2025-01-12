<?php

namespace Owlookit\Tiptoppay\Enum;

use MyCLabs\Enum\Enum;

/**
 * Тип коррекции
 * @see https://kassir.tiptoppay.kz/#correctiontype
 */
class CorrectionType extends Enum
{
    /** @var int Самостоятельно */
    public const BY_YOURSELF = 0;

    /** @var int По предписанию */
    public const BY_DEMAND = 1;
}
