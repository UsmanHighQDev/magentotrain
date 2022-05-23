<?php
declare(strict_types=1);

namespace HighQDev\Core\Controller\Customer;

class Index extends \Magento\Framework\App\Action\Action
{
    public function execute()
    {
        $this->_view->loadLayout();
        $this->_view->renderLayout();
    }
}

?>
