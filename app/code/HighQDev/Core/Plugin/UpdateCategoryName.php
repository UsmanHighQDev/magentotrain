<?php
declare(strict_types=1);

namespace HighQDev\Core\Plugin;

/**
 * Class updateWelcomeMessage
 * @package HighQDev\Core\Plugin
 */
class UpdateCategoryName
{
    /**
     * @param \Magento\Theme\Block\Html\Header $subject
     * @param $result
     * @return string
     */
    public function afterGetPageHeading(\Magento\Theme\Block\Html\Title $subject, $result)
    {
        $append = __(' using plugins ');
        $result = $result . $append;
        return $result;

    }
}
