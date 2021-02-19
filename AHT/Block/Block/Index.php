<?php

namespace AHT\Block\Block;


class Index extends \Magento\Framework\View\Element\Template
{
     protected $_blockFactory;

     public function __construct(
          \Magento\Framework\View\Element\Template\Context $context,
          \AHT\Block\Model\BlockFactory $blockFactory
     ) {
          parent::__construct($context);
          $this->_blockFactory = $blockFactory;
     }

     public function getAll()
     {
          $block      = $this->_blockFactory->create();
          $collection = $block->getCollection();
          return $collection;
     }
}
