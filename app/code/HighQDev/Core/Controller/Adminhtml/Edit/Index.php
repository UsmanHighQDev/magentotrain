<?php
declare(strict_types=1);

namespace HighQDev\Core\Controller\Adminhtml\Edit;

use Magento\Backend\App\Action;
use Magento\Framework\Controller\ResultFactory;

class Index extends Action
{

    public function execute()
    {
        $resultPage = $this->resultFactory->create(ResultFactory::TYPE_PAGE);
        $resultPage->getConfig()->getTitle()->prepend(__("Edit Comment"));
        return $resultPage;
    }
    public function _isAllowed()
    {
        return $this->_authorization->isAllowed('HighQDev_Core::edit');
    }
}
