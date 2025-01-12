<?php

namespace Owlookit\Tiptoppay\Response;

use Owlookit\Tiptoppay\Response\Models\SbpBankModel;
use Owlookit\Tiptoppay\Response\Models\TransactionModel;
use stdClass;

/**
 * Class TransactionResponse
 * @package Owlookit\Tiptoppay\Response
 */
class TransactionResponse extends CloudResponse
{
    /** @var TransactionModel */
    public $model;

    /**
     * {@inheritdoc}
     * @param stdClass $modelDate
     */
    public function fillModel($modelDate)
    {
        $model = new TransactionModel();
        $model->fill($modelDate);
        if (isset($modelDate->Banks->dictionary) && is_array($modelDate->Banks->dictionary)) {
            $banks = [];
            foreach ($modelDate->Banks->dictionary as $bankValue) {
                $bank    = new SbpBankModel();
                $bank->fill($bankValue);
                $banks[] = $bank;
            }
            $model->sbpBankModels = $banks;
        }

        $this->model = $model;
    }
}
