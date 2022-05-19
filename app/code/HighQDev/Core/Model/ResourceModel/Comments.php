<?php
declare(strict_types=1);

namespace HighQDev\Core\Model\ResourceModel;

/**
 * Class Comments
 * @package HighQDev\Core\Model\ResourceModel
 */
class Comments extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * Comments constructor.
     * @param \Magento\Framework\Model\ResourceModel\Db\Context $context
     */

    public function __construct(
        \Magento\Framework\Model\ResourceModel\Db\Context $context
    ) {
        parent::__construct($context);
    }

    protected function _construct()
    {
        $this->_init('highqdev_customer_comments', 'entity_id');
    }

}
