<?php

namespace Krasilich\Blog\Controller\Index;

use \Magento\Framework\App\Action\Action;
use Magento\Framework\View\Result\PageFactory;

class Index extends Action
{
    protected $_resultPageFactory;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory
    ){
        parent::__construct($context);

        $this->_resultPageFactory = $resultPageFactory;
    }

    public function execute() {
        return $this->_resultPageFactory->create();
    }
}
