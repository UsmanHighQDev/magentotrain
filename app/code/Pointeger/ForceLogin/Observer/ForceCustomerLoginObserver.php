<?php
declare(strict_types=1);

namespace Pointeger\ForceLogin\Observer;

use Magento\Framework\Event\ObserverInterface;

class ForceCustomerLoginObserver implements ObserverInterface
{
    protected $responseFactory;

    protected $url;

    private $scopeConfig;

    private $customerSession;

    private $customerUrl;

    private $context;

    private $contextHttp;

    public function __construct(
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig,
        \Magento\Framework\App\Action\Context $context,
        \Magento\Customer\Model\Session $customerSession,
        \Magento\Framework\App\Http\Context $contextHttp,
        \Magento\Customer\Model\Url $customerUrl,
        \Magento\Framework\App\ResponseFactory $responseFactory,
        \Magento\Framework\UrlInterface $url
    ) {
        $this->scopeConfig = $scopeConfig;
        $this->context = $context;
        $this->customerSession = $customerSession;
        $this->customerUrl = $customerUrl;
        $this->contextHttp = $contextHttp;
        $this->messageManager = $context->getMessageManager();
        $this->responseFactory = $responseFactory;
        $this->url = $url;
    }

    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        $isLoggedIn = $this->contextHttp->getValue(\Magento\Customer\Model\Context::CONTEXT_AUTH);

        if ($isLoggedIn) {
            $this->messageManager->addSuccess(__('Customer Logged In.'));
            return $this;
        } else {
            $this->messageManager->addError(__('You must login into system for accessing this page.'));
            $customRedirectionUrl = $this->url->getUrl('customer/account/login');
            $this->responseFactory->create()->setRedirect($customRedirectionUrl)->sendResponse();
            return $this;
        }


    }
}
