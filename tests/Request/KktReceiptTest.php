<?php

namespace Flowwow\Test;

use Owlookit\Tiptoppay\Exceptions\BadTypeException;
use Owlookit\Tiptoppay\Request\ApplepayStartSession;
use Owlookit\Tiptoppay\Request\KktReceipt;
use Owlookit\Tiptoppay\Request\Receipt\CustomerReceipt;
use Owlookit\Tiptoppay\Request\Receipt\ReceiptAmounts;
use Owlookit\Tiptoppay\Request\Receipt\ReceiptItem;
use Owlookit\Tiptoppay\Request\Receipt\ReceiptItemAgentData;
use Owlookit\Tiptoppay\Request\Receipt\ReceiptItemPurveyorData;
use PHPUnit\Framework\TestCase;

/**
 * Class KktReceiptTest
 * @group Tiptoppay
 */
class KktReceiptTest extends TestCase
{
    /**
     * Проверка формирования массива
     */
    public function testTransformToArray()
    {
        $item = new ReceiptItem('Наименование товара 1', '100.00', '1.00');
        $agentData = new ReceiptItemAgentData();
        $agentData->agentOperationName = 'operation name';
        $item->agentData = $agentData;
        $item->purveyorData = new ReceiptItemPurveyorData('ООО Ромашка', '1234567890');
        $items = [
            $item,
            new ReceiptItem('Наименование товара 2', '200.00', '2.00'),
        ];
        $amounts = new ReceiptAmounts();
        $amounts->advancePayment = '1300.00';
        $customerReceipt = new CustomerReceipt($items, '2', $amounts);

        $receipt = new KktReceipt('9000000000', 'Income', $customerReceipt);

        $result = [
            'Inn'             => '9000000000',
            'Type'            => 'Income',
            'CustomerReceipt' => [
                'Items'          => [
                    [
                        'Label'        => 'Наименование товара 1',
                        'Price'        => '100.00',
                        'Amount'       => '1.00',
                        'AgentData'    => [
                            'AgentOperationName' => 'operation name'
                        ],
                        'PurveyorData' => [
                            'Name' => 'ООО Ромашка',
                            'Inn'  => '1234567890',
                        ],
                    ],
                    [
                        'Label'  => 'Наименование товара 2',
                        'Price'  => '200.00',
                        'Amount' => '2.00',
                    ],
                ],
                'TaxationSystem' => '2',
                'Amounts'        => [
                    'AdvancePayment' => '1300.00'
                ],
            ],
        ];
        $this->assertEquals($result, $receipt->asArray());
    }
}
