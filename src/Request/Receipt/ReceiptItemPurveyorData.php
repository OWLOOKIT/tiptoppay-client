<?php

namespace Owlookit\Tiptoppay\Request\Receipt;

use Owlookit\Tiptoppay\BaseRequest;

/**
 * @see https://kassir.tiptoppay.kz/#purveyordata
 */
class ReceiptItemPurveyorData extends BaseRequest
{
   public string $name;
   public string $inn;
   public ?string $phone = null;

    /**
     * @param string $name
     * @param string $inn
     */
    public function __construct(string $name, string $inn)
   {
       $this->name = $name;
       $this->inn  = $inn;
   }
}
