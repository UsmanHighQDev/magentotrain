<?php


namespace HighQDev\Core\Controller\Custom;


class Index extends \Magento\Framework\App\Action\Action
{
    protected $_logger;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \HighQDev\Core\Logger\Logger $logger
    ) {
        $this->_logger = $logger;
        return parent::__construct($context);
    }

    public function execute()
    {
        $this->_logger->info('I did something');
        echo "this is working";
    }
}
