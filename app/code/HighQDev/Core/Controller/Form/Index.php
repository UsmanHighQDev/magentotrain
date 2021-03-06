<?php
declare(strict_types=1);

namespace HighQDev\Core\Controller\Form;

/**
 * Class Index
 * @package HighQDev\Core\Controller\Form
 */
class Index extends \Magento\Framework\App\Action\Action
{
    /**
     * @var \Magento\Framework\View\Result\PageFactory
     */
    protected $_pageFactory;

    /**
     * Index constructor.
     * @param \Magento\Framework\App\Action\Context $context
     * @param \Magento\Framework\View\Result\PageFactory $pageFactory
     * @param \HighQDev\Core\Model\CommentsFactory $commentsFactory
     */
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $pageFactory,
        \HighQDev\Core\Model\CommentsFactory $commentsFactory
    ) {
        $this->_pageFactory = $pageFactory;
        return parent::__construct($context);
    }

    /**
     * @return \Magento\Framework\View\Result\Page
     */
    public function execute()
    {
        return $this->_pageFactory->create();

    }
}
