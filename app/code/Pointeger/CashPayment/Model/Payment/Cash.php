<?php

declare(strict_types=1);

namespace Pointeger\CashPayment\Model\Payment;


class Cash extends \Magento\Payment\Model\Method\AbstractMethod
{
    /**
     * @var string
     */
    protected $_code = 'cashpayment';

}
