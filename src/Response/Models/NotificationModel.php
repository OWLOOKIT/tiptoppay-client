<?php

namespace Owlookit\Tiptoppay\Response\Models;

/**
 * Class NotificationModel
 * @package Owlookit\Tiptoppay\Response\Models
 */
class NotificationModel extends BaseModel
{
    public ?bool   $isEnabled  = null;
    public ?string $address    = null;
    public ?string $httpMethod = null;
    public ?string $encoding   = null;
    public ?string $format     = null;
}
