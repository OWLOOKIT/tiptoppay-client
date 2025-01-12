<?php

namespace Owlookit\Tiptoppay\Request\Receipt;

use Owlookit\Tiptoppay\BaseRequest;

/**
 * Основание для коррекции
 * @see https://kassir.tiptoppay.kz/#causecorrection
 */
class CauseCorrection extends BaseRequest
{
    /** @var string Дата документа основания для коррекции */
    public string $correctionDate;

    /** @var string Номер документа основания для коррекции */
    public string $correctionNumber;
}
