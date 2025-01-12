<?php

namespace Owlookit\Tiptoppay\Response;

use Owlookit\Tiptoppay\Response\Models\AppleSessionModel;
use stdClass;

/**
 * Class NotificationResponse
 * @package Owlookit\Tiptoppay\Response
 */
class AppleSessionResponse extends CloudResponse
{
    /** @var AppleSessionModel */
    public $model;

    /**
     * {@inheritdoc}
     * @param stdClass $modelDate
     */
    public function fillModel($modelDate)
    {
        $model = new AppleSessionModel();
        $model->fill($modelDate);

        $this->model = $model;
    }
}
