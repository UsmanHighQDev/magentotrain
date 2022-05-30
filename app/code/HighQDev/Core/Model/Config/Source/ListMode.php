<?php
declare(strict_types=1);

namespace HighQDev\Core\Model\Config\Source;

class ListMode implements \Magento\Framework\Data\OptionSourceInterface
{
    public function toOptionArray()
    {
        return [
            ['value' => '1', 'label' => __('Monday')],
            ['value' => '2', 'label' => __('Tuesday')],
            ['value' => '3', 'label' => __('Wednesday')],
            ['value' => '4', 'label' => __('Thursday')]
        ];
    }

}
