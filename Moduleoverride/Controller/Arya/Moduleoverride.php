<?php
namespace Mymodule\Moduleoverride\Controller\Arya;
 
 
class Moduleoverride extends \Magento\Framework\App\Action\Action
{
    public function __construct(
        \Magento\Framework\App\Action\Context $context)
    {
        return parent::__construct($context);
    }
     
    public function execute()
    {
        echo 'Hello World';
        exit;
    } 
}
/*http://localhost:88/magento2/moduleoverride/arya/moduleoverride*/