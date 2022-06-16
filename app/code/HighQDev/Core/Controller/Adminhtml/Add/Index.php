<?php
declare(strict_types=1);

namespace HighQDev\Core\Controller\Adminhtml\Add;
use Magento\Backend\App\Action;
use Magento\Framework\Controller\ResultFactory;

class Index extends Action
{
    public function execute()
    {
        $resultPage = $this->resultFactory->create(ResultFactory::TYPE_PAGE);
        $resultPage->getConfig()->getTitle()->prepend(__("Add Comment"));
        return $resultPage;
    }
}
