<?php
    /**
     * Hello Rewrite Product ListProduct Block
     *
     * @category    Webkul
     * @package     Webkul_Hello
     * @author      Webkul Software Private Limited
     *
     */
    namespace Mymodule\Moduleoverride\Block\Rewrite\Product;
 
    class ListProduct extends \Magento\Catalog\Block\Product\ListProduct
    {
        /*public function _getProductCollection()
        {
            //die('overridemodule');
            if ($this->_productCollection === null) {
            $this->_productCollection = $this->initializeProductCollection();
            }

            return $this->_productCollection;
            }*/

        public function getProductPrice(\Magento\Catalog\Model\Product $product)
        {
        $priceRender = $this->getPriceRender();

        if ($priceRender) {
            $price = $priceRender->render(
                \Magento\Catalog\Pricing\Price\FinalPrice::PRICE_CODE,
                $product,
                [
                    'include_container' => true,
                    'display_minimal_price' => true,
                    'zone' => \Magento\Framework\Pricing\Render::ZONE_ITEM_LIST,
                    'list_category_page' => true
                ]
            );
        }
        return $price;
        }
    }