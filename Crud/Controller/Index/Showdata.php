<?php
 
namespace Bluethink\Crud\Controller\Index;
 
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\App\Action\Action;
 
class Showdata extends Action
{
    protected $resultPageFactory;
 
    public function __construct(Context $context, PageFactory $resultPageFactory)
    {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
    }
 
    public function execute()
    {
        // die("hrllo");
        return $this->resultPageFactory->create();
    }
}