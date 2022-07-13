<?php
declare(strict_types=1);

namespace HighQDev\Core\Observer;

use Magento\Framework\Event\ObserverInterface;
use HighQDev\Core\Helper\Email;
use Magento\Framework\Event\Observer;
class CustomerRegisterObserver implements ObserverInterface
{

    /**
     * @var Email
     */
    private $helperEmail;

    /**
     * CustomerRegisterObserver constructor.
     * @param Email $helperEmail
     */
    public function __construct(
        Email $helperEmail
    ) {
        $this->helperEmail = $helperEmail;
    }
    /**
     * @param Observer $observer
     */
    public function execute(Observer $observer)
    {
        return $this->helperEmail->sendEmail();
    }
}
