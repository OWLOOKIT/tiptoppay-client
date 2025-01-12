<?php

namespace Owlookit\Tiptoppay\Response;

use Owlookit\Tiptoppay\Response\Models\SubscriptionModel;
use stdClass;

/**
 * Class SubscriptionResponse
 * @package Owlookit\Tiptoppay\Response
 */
class SubscriptionResponse extends CloudResponse
{
    /** @var SubscriptionModel */
    public $model;

    /**
     * {@inheritdoc}
     * @param stdClass $modelDate
     */
    public function fillModel($modelDate)
    {
        $model = new SubscriptionModel();
        $model->fill($modelDate);

        $this->model = $model;
    }
}
