<?php

namespace Owlookit\Tiptoppay\Request\Receipt;

use Owlookit\Tiptoppay\BaseRequest;

/**
 * @see https://kassir.tiptoppay.kz/#items
 */
class ReceiptItem extends BaseRequest
{
    public string                       $label;
    public string                       $price;
    public string                       $quantity;
    public string                       $amount;
    public ?string                      $vat;
    public ?string                      $method                      = null;
    public ?string                      $object                      = null;
    public ?string                      $measurementUnit             = null;
    public ?string                      $excise                      = null;
    public ?string                      $countryOriginCode           = null;
    public ?string                      $customsDeclarationNumber    = null;
    public ?string                      $agentSign                   = null;
    public ?ReceiptItemAgentData        $agentData                   = null;
    public ?ReceiptItemPurveyorData     $purveyorData                = null;
    public ?string                      $additionalPositionInfo      = null;
    public ?string                      $saleObjectData              = null;
    public ?array                       $industryRequisiteCollection = null;
    public ?ReceiptItemProductCodeData  $productCodeData             = null;
    public ?array                       $markPartQuantity            = null;
    public ?string                      $rawMarkCode                 = null;
    public ?string                      $groupSeparator              = null;
    public ?string                      $unitCode;


    /**
     * @param string      $label
     * @param string      $price
     * @param string      $amount
     * @param string|null $vat
     */
    public function __construct(string $label, string $price, string $amount, ?string $vat = null)
    {
        $this->label  = $label;
        $this->price  = $price;
        $this->amount = $amount;
        $this->vat    = $vat;
    }
}
