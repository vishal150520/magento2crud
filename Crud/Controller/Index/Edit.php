<?php
 
namespace Bluethink\Crud\Controller\Index;
 
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\UrlInterface;
use Magento\Framework\View\Result\PageFactory;
use Bluethink\Crud\Model\ExtensionFactory;
 
class Edit extends Action
{
    protected $resultPageFactory;
 
    private $extensionFactory;
 
    private $url;
 
    public function __construct(UrlInterface $url, ExtensionFactory $extensionFactory, Context $context, PageFactory $resultPageFactory)
    {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
        $this->extensionFactory = $extensionFactory;
        $this->url = $url;
    }
 
    public function execute()
    {
        if ($this->isCorrectData()) {
            // die("hello");
            return $this->resultPageFactory->create();
        } else {
            $this->messageManager->addErrorMessage(__("Record Not Found"));
            $resultRedirect = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);
            $resultRedirect->setUrl($this->url->getUrl('extension/index/showdata'));
            return $resultRedirect;
        }
    }
 
    public function isCorrectData()
    {
        if ($id = $this->getRequest()->getParam("id")) {
            $model = $this->extensionFactory->create();
            $model->load($id);
            if ($model->getId()) {
                return true;
            } else {
                return false;
            }
        } else {
            return true;
        }
    }
}