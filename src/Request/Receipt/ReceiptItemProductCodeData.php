<?php

namespace Owlookit\Tiptoppay\Request\Receipt;

use Owlookit\Tiptoppay\BaseRequest;

/**
 * @see https://kassir.tiptoppay.kz/#productcodedata
 */
class ReceiptItemProductCodeData extends BaseRequest
{
   public ?string $codeProductNomenclature = null;
}
