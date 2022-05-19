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
     * @var \HighQDev\Core\Model\CommentsFactory
     */
    protected $_commentFactory;

    /**
     * Index constructor.
     * @param \Magento\Framework\App\Action\Context $context
     * @param \HighQDev\Core\Model\CommentsFactory $commentsFactory
     */
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \HighQDev\Core\Model\CommentsFactory $commentsFactory
    ) {
        $this->_commentFactory = $commentsFactory;
        return parent::__construct($context);
    }

    /**
     * @return \Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        $request = $this->getRequest();
        $data = $request->getParams();
        if (array_key_exists("sku", $data) && $data['sku']) {
            $this->messageManager->addSuccess(__("Your message has been saved against the product having SKU " . $data['sku']));
        } else {
            $this->messageManager->addError(__("Invalid SKU"));
        }
        if ($this->getRequest()->isPost()) {
            $input = $this->getRequest()->getParams();
            $post = $this->_commentFactory->create();

            if ($input['sku']) {
                $post->setSku($input['sku']);
                $post->setComment($input['msg']);
                $post->setApproved(0);
                $post->save();
            }
            $resultRedirect = $this->resultRedirectFactory->create();
            $resultRedirect->setPath('core/form/index');
            return $resultRedirect;
        }
    }
}
