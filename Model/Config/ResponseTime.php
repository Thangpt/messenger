<?php

namespace Magenest\Messenger\Model\Config;

class ResponseTime implements \Magento\Framework\Option\ArrayInterface
{
    /**
     * @return array
     */
    public function toOptionArray()
    {
        return [
            [
                'value' => '0',
                'Automatically set response time' => 'No',
            ],
            [
                'value' => '1',
                'label' => 'Yes',
            ],
        ];
    }
}
