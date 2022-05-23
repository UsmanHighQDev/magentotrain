<?php
declare(strict_types=1);

namespace HighQDev\Core\Observer;

use Magento\Framework\Event\Observer as EventObserver;
use Magento\Framework\Event\ObserverInterface;

/**
 * Class UpdateColumValue
 * @package HighQDev\Core\Observer
 */
class UpdateColumValue implements ObserverInterface
{
    /**
     * @var \Psr\Log\LoggerInterface
     */
    protected $_logger;

    /**
     * UpdateColumValue constructor.
     * @param \Psr\Log\LoggerInterface $logger
     */
    public function __construct(
        \Psr\Log\LoggerInterface $logger
    ) {
        $this->_logger = $logger;
    }

    /**
     * @param EventObserver $observer
     */
    public function execute(EventObserver $observer)
    {
        $quoteItem = $observer->getData('quote_item');
        $product = $quoteItem->getProduct();
        $this->_logger->info("CUSTOM LOG - Product" . $product->getName() . (' and SKU ') . $product->getSku());
        $quoteItem->setData('product_identifier', $product->getSku());
    }
}
