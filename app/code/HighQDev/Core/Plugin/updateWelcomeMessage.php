<?php
declare(strict_types=1);

namespace HighQDev\Core\Plugin;

/**
 * Class updateWelcomeMessage
 * @package HighQDev\Core\Plugin
 */
class UpdateWelcomeMessage
{
    /**
     * @param \Magento\Theme\Block\Html\Header $subject
     * @param $result
     * @return string
     */
    public function afterGetWelcome(\Magento\Theme\Block\Html\Header $subject, $result)
    {
        $append = __(' using plugins ');
        $result = $result . $append;
        return $result;

    }
}
