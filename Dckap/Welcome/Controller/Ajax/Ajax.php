<?php
namespace Dckap\Welcome\Controller\Ajax;
use Magento\Framework\App\Action\Context;
class Ajax extends \Magento\Framework\App\Action\Action
{
    public function execute()
    {
        // $this->_view->loadLayout();
        // $this->_view->getLayout()->initMessages();
        // $this->_view->renderLayout();
		echo "hello this is running the ajax";
    }
}