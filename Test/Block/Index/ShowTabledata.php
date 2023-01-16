<?php
namespace Bluethink\Test\Block\Index;
 
use Magento\Framework\View\Element\Template;
use Magento\Backend\Block\Template\Context;
use Bluethink\Test\Model\ResourceModel\Extension\CollectionFactory;
 
class ShowTabledata extends Template
{
 
    public $collection;
 
    public function __construct(Context $context, CollectionFactory $collectionFactory, array $data = [])
    {
        $this->collection = $collectionFactory;
        parent::__construct($context, $data);
    }
 
    public function getCollection()
    {
        return $this->collection->create();
    }

    //     public function sayHello()
    // {
    //     return "Hello Visal";
    // }
 
}