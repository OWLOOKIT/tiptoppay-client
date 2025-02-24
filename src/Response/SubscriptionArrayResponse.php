<?php

namespace Owlookit\Tiptoppay\Response;

use Owlookit\Tiptoppay\Response\Models\SubscriptionModel;
use stdClass;

/**
 * Class SubscriptionArrayResponse
 * @package Owlookit\Tiptoppay\Response
 */
class SubscriptionArrayResponse extends CloudResponse
{
    /** @var SubscriptionModel[] */
    public $model;

    /**
     * {@inheritdoc}
     * @param stdClass $modelDate
     */
    public function fillModel($modelDate)
    {
        $models = [];
        if (is_array($modelDate)) {
            foreach ($modelDate as $value) {
                $model = new SubscriptionModel();
                $model->fill($value);

                $models[] = $model;
            }
        }

        $this->model = $models;
    }
}
