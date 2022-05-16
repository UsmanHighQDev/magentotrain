<?php
declare(strict_types=1);

namespace HighQDev\Core\Controller\Message;

/**
 * Class Index
 * @package HighQDev\Core\Controller\Message
 */
class Index extends \Magento\Framework\App\Action\Action
{
    /**
     * @return \Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        $request = $this->getRequest();
        $data = $request->getParams();
        if ($data['sku']) {

            $this->messageManager->addError(__("Invalid SKU"));

        } else {
            $this->messageManager->addSuccess(__("Your message has been saved "));
        }
        $resultRedirect = $this->resultRedirectFactory->create();
        $resultRedirect->setPath('core/form/index');
        return $resultRedirect;
    }
}
