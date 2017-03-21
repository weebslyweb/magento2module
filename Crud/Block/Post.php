<?php
namespace Mymodule\Crud\Block;
class Post extends \Magento\Framework\View\Element\Template
{
	protected $_postFactory;
	public function _construct(
		\Magento\Framework\View\Element\Template\Context $context,
		\Mymodule\Crud\Model\PostFactory $postFactory
	){
		$this->_postFactory = $postFactory;
		parent::_construct($context);
	}

	public function _prepareLayout()
	{
		$post = $this->_postFactory->create();
		$collection = $post->getCollection();
		foreach($collection as $item){
			var_dump($item->getData());
		}
		exit;
	}
}

