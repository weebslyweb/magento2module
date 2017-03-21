<?php
namespace Mymodule\Helloword\Block;
 
class Helloword extends \Magento\Framework\View\Element\Template
{
    public function getHelloWordTxt()
    {
        return 'Hello world!';
    }
}