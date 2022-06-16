<?php
declare(strict_types=1);

namespace HighQDev\Core\Controller\Adminhtml\Save;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\UrlInterface;
use Magento\Framework\View\Result\PageFactory;
use HighQDev\Core\Model\CommentsFactory;

/**
 * Class Index
 * @package HighQDev\Core\Controller\Adminhtml\Save
 */
class Index extends Action
{
    /**
     * @var PageFactory
     */
    protected $resultPageFactory;
    protected $commentsFactory;
    private $url;

    /**
     * Index constructor.
     * @param UrlInterface $url
     * @param Context $context
     * @param PageFactory $resultPageFactory
     * @param CommentsFactory $commentsFactory
     */
    public function __construct(
        UrlInterface $url,
        Context $context,
        PageFactory $resultPageFactory,
        CommentsFactory $commentsFactory
    )
    {
        $this->resultPageFactory = $resultPageFactory;
        $this->commentsFactory = $commentsFactory;
        $this->url = $url;
        parent::__construct($context);
    }

    /**
     * @return \Magento\Framework\App\ResponseInterface|\Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        try {
            $data = (array)$this->getRequest()->getPost();

            if ($data) {
                $model = $this->commentsFactory->create();
                $model->setData($data)->save();
                $this->messageManager->addSuccessMessage(__("Data Saved Successfully."));
            }
        } catch (\Exception $e) {
            $this->messageManager->addErrorMessage($e, __("We can\'t submit your request, Please try again."));
        }
        $resultRedirect = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);
        $resultRedirect->setUrl($this->url->getUrl('highqdev_core/comments/index'));
        return $resultRedirect;
    }
}

