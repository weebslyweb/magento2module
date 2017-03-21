<?php
    namespace Mymodule\Moduleoverride\Model\Rewrite\Catalog;
 
    class Product extends \Magento\Catalog\Model\Product
    {
        public function isSalable()
        {
            // Do your stuff here
            //echo 'model overrite working';die();
            return parent::isSalable();
        }
 
    }