<?php

namespace Owlookit\Tiptoppay\Response\Models;

use stdClass;

/**
 * Class BaseModel
 * @package Owlookit\Tiptoppay\Response\Models
 */
class BaseModel
{
    public function fill(stdClass $fillData)
    {
        $props = get_object_vars($fillData);
        foreach ($props as $key => $value) {
            $lowerKey = lcfirst($key);
            $this->{$lowerKey} = $value;
        }
    }
}
