<?php
declare(strict_types=1);

namespace HighQDev\Core\Model\ResourceModel\Comments;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected $_idFieldName = 'entity_id';
    protected $_eventPrefix = 'highqdev_customer_comments_collection';
    protected $_eventObject = 'comments_collection';

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('HighQDev\Core\Model\Comments', 'HighQDev\Core\Model\ResourceModel\Comments');
    }
}
