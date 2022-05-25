<?php
declare(strict_types=1);

namespace HighQDev\Core\Block;

/**
 * Class Title
 * @package HighQDev\Core\Block
 *
 */
class Title extends \Magento\Theme\Block\Html\Title
{
    /**
     * @return \Magento\Framework\Phrase|mixed|string
     */
    public function getPageHeading()
    {
        if (!empty($this->pageTitle)) {
            return $this->getTranslate() === false ? $this->pageTitle . ' preference ' : __($this->pageTitle . ' preference ');
        }
        return $this->getTranslate() === false ?
            $this->pageConfig->getTitle()->getShortHeading()
            : __($this->pageConfig->getTitle()->getShortHeading());
    }

}
