<?php
declare(strict_types=1);

namespace HighQDev\Core\Block\Adminhtml\Button;
use Magento\Backend\Block\Widget\Context;
use Magento\Cms\Api\PageRepositoryInterface;

/**
 * Class Generic
 * @package HighQDev\Core\Block\Adminhtml\Button
 */
class Generic
{
    /**
     * @var Context
     */
    protected $context;
    protected $pageRepository;

    /**
     * Generic constructor.
     * @param Context $context
     * @param PageRepositoryInterface $pageRepository
     */
    public function __construct(
        Context $context,
        PageRepositoryInterface $pageRepository
    ) {
        $this->context = $context;
        $this->pageRepository = $pageRepository;
    }

    /**
     * @param string $route
     * @param array $params
     * @return string
     */
    public function getUrl($route = '', $params = [])
    {
        return $this->context->getUrlBuilder()->getUrl($route, $params);
    }

}
