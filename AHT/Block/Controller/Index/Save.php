<?php

namespace AHT\Block\Controller\Index;

class Save extends \Magento\Framework\App\Action\Action
{
     protected $_pageFactory;
     protected $_blockFactory;
     protected $_cacheTypeList;
     protected $_cacheFrontendPool;
     protected $_cache;

     public function __construct(
          \Magento\Framework\App\Action\Context $context,
          \Magento\Framework\View\Result\PageFactory $pageFactory,
          \AHT\Block\Model\BlockFactory $blockFactory,
          \AHT\Block\Block\CacheFont $CacheFont
     ) {
          $this->_pageFactory  = $pageFactory;
          $this->_blockFactory = $blockFactory;
          $this->_cache        = $CacheFont;
          return parent::__construct($context);
     }

     public function execute()
     {
          $block = $this->_blockFactory->create();

          if (isset($_POST['btn_edit'])) {

               $id   = $this->getRequest()->getParam('id');
               $edit = $block->load($id);

               $edit->setTitle($_POST['title']);
               $edit->setDescription($_POST['description']);
               $edit->save();
          } elseif (isset($_POST['btn_create'])) {

               $block->setTitle($_POST['title']);
               $block->setDescription($_POST['description']);
               $block->save();
          }

          $this->_cache->delete_Cache();

          $resultRedirect = $this->resultRedirectFactory->create();
          $resultRedirect->setPath('block/index/index');
          return $resultRedirect;
     }
}
