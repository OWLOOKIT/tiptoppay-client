<?php

namespace Owlookit\Tiptoppay\Response;

use Owlookit\Tiptoppay\Response\Models\OrderModel;
use stdClass;

/**
 * Class SubscriptionResponse
 * @package Owlookit\Tiptoppay\Response
 */
class OrderResponse extends CloudResponse
{
    /** @var OrderModel */
    public $model;

    /**
     * {@inheritdoc}
     * @param stdClass $modelDate
     */
    public function fillModel($modelDate)
    {
        $model = new OrderModel();
        $model->fill($modelDate);

        $this->model = $model;
    }
}
