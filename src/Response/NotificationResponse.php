<?php

namespace Owlookit\Tiptoppay\Response;

use Owlookit\Tiptoppay\Response\Models\NotificationModel;
use stdClass;

/**
 * Class NotificationResponse
 * @package Owlookit\Tiptoppay\Response
 */
class NotificationResponse extends CloudResponse
{
    /** @var NotificationModel */
    public $model;

    /**
     * {@inheritdoc}
     * @param stdClass $modelDate
     */
    public function fillModel($modelDate)
    {
        $model = new NotificationModel();
        $model->fill($modelDate);

        $this->model = $model;
    }
}
