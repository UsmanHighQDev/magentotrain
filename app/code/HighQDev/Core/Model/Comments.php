<?php
declare(strict_types=1);

namespace HighQDev\Core\Model;

class Comments extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface
{
    const ENTITY_ID = 'entity_id';

    const SKU = 'sku';

    const COMMENT = 'comment';

    const APPROVED = 'approved';

    const CACHE_TAG = 'highqdev_customer_comments';

    protected $_cacheTag = 'highqdev_customer_comments';

    protected $_eventPrefix = 'highqdev_customer_comments';


    protected function _construct()
    {
        $this->_init('HighQDev\Core\Model\ResourceModel\Comments');
    }

    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }

    /**
     * @param int $entityId
     * @return Comments
     */
    public function setEntityId($entityId)
    {
        return $this->setData(self::ENTITY_ID, $entityId);
    }

    /**
     * @return int|null
     */
    public function getEntityId()
    {
        return $this->getData(self::ENTITY_ID);
    }

    /**
     * @param $sku
     * @return Comments
     */
    public function setSku($sku)
    {
        return $this->setData(self::SKU, $sku);
    }

    /**
     * @return mixed
     */
    public function getSku()
    {
        return $this->getData(self::SKU);
    }

    /**
     * @param $comment
     * @return Comments
     */
    public function setComment($comment)
    {
        return $this->setData(self::COMMENT, $comment);
    }

    /**
     * @return mixed
     */
    public function getComment()
    {
        return $this->getData(self::COMMENT);
    }

    /**
     * @param $approved
     * @return Comments
     */
    public function setApproved($approved)
    {
        return $this->setData(self::APPROVED, $approved);
    }

    /**
     * @return mixed
     */
    public function getApproved()
    {
        return $this->getData(self::APPROVED);

    }
}
