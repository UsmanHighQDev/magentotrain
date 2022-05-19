<?php
declare(strict_types=1);

namespace HighQDev\Core\Block;

use Magento\Framework\View\Element\Template\Context;
use Magento\Customer\Model\Session;

/**
 * Class Index
 * @package HighQDev\Core\Block
 */
class Index extends \Magento\Framework\View\Element\Template
{
    /**
     * @var Session
     */
    protected $_customerSession;
    protected $_commentFactory;

    /**
     * Index constructor.
     * @param Context $context
     * @param Session $_customerSession
     * @param array $data
     */
    public function __construct(
        Context $context,
        Session $_customerSession,
        \HighQDev\Core\Model\CommentsFactory $commentsFactory,
        array $data = []
    ) {
        $this->_customerSession = $_customerSession;
        $this->_commentFactory = $commentsFactory;

        parent::__construct($context, $data);
    }

    /**
     * @return bool
     */
    public function isCustomerLoggedIn()
    {
        return $this->_customerSession->isLoggedIn();
    }

    /**
     * @return array
     */
    public function getCustomer()
    {
        $customer = $this->_customerSession->getCustomer();
        return [
            'name' => $customer->getFirstname() . $customer->getLastname(),
            'email' => $customer->getEmail()
        ];
    }

    /**
     * @return \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
     */
    public function getResult()
    {
        $comment = $this->_commentFactory->create();
        $collection = $comment->getCollection();
        return $collection;
    }
}
