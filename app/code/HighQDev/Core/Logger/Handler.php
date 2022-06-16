<?php
declare(strict_types=1);

namespace HighQDev\Core\Logger;
use Monolog\Logger;

/**
 * Class Handler
 * @package HighQDev\Core\Logger
 */
class Handler extends \Magento\Framework\Logger\Handler\Base
{
    /**
     * @var int
     */
    protected $loggerType = Logger::INFO;
    /**
     * @var string
     */
    protected $fileName = '/var/log/customLogger.log';
}
