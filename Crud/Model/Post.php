<?php 
namespace Mymodule\Crud\Model;
class Post extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface,
\Mymodule\Crud\Model\Api\Data\PostInterface
{
    const CACHE_TAG = 'mymodule_crud_post';

    protected $_cacheTag = 'mymodule_crud_post';

    protected $_eventPrefix = 'mymodule_crud_post';

    protected function _construct()
    {
        $this->_init('Mymodule\Crud\Model\ResourceModel\Post');
    }

    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }

    public function getDefaultValues()
    {
        $values = [];

        return $values;
    }
}

