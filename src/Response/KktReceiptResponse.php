<?php

namespace Owlookit\Tiptoppay\Response;

use Owlookit\Tiptoppay\Response\Models\KktReceiptModel;
use stdClass;

/**
 * Class KktReceiptResponse
 * @package Owlookit\Tiptoppay\Response
 */
class KktReceiptResponse extends CloudResponse
{
    /** @var KktReceiptModel */
    public $model;

    /**
     * {@inheritdoc}
     * @param stdClass $modelDate
     */
    public function fillModel($modelDate)
    {
        $model = new KktReceiptModel();
        $model->fill($modelDate);

        $this->model = $model;
    }
}
