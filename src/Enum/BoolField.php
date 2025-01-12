<?php

namespace Owlookit\Tiptoppay\Enum;

use MyCLabs\Enum\Enum;

/**
 * Bool-значения для клауда
 * https://kassir.tiptoppay.kz/#agentsign
 */
class BoolField extends Enum
{
    /**
     * True
     * @var string
     */
    public const TRUE = 'true';
    /**
     * False
     * @var string
     */
    public const FALSE = 'false';

}
