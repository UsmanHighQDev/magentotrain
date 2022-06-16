<?php
declare(strict_types=1);

namespace HighQDev\Core\Controller\Adminhtml\Delete;
use Magento\Backend\App\Action;

/**
 * Class Index
 * @package HighQDev\Core\Controller\Adminhtml\Delete
 */
class Index extends Action
{
    /**
     * @var \HighQDev\Core\Model\Comments
     */
    protected $_comment;

    /**
     * Index constructor.
     * @param Action\Context $context
     * @param \HighQDev\Core\Model\Comments $comments
     */
    public function __construct(
        Action\Context $context,
        \HighQDev\Core\Model\Comments $comments
    ) {

        $this->_comment = $comments;

        parent::__construct($context);
    }

    /**
     * @return \Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        $id = $this->getRequest()->getParam('id');
        $resultRedirect = $this->resultRedirectFactory->create();
        if ($id) {
            try {
                $model = $this->_comment;
                $model->load($id);
                $model->delete();
                $this->messageManager->addSuccess(__('Comment Deleted'));
                $resultRedirect = $this->resultRedirectFactory->create();
                $resultRedirect->setPath('highqdev_core/comments/index');
                return $resultRedirect;
            } catch (\Exception $e) {
                $this->messageManager->addError($e->getMessage());
                return $resultRedirect->setPath('*/*/edit', ['id' => $id]);
            }
        }
    }
}
