<?php

namespace Bluethink\Test\Block\Index;

use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;


class Index extends Template
{
    public function __construct(
        Context $context,
        array $data = []
    ) {
        parent::__construct($context, $data);
    }
    public function getFormAction()
    {
      
        return $this->getUrl('test/index/submit', ['_secure' => true]);
    }
    
  public function test(){
    echo "Hello Magento 2";
  }
}
