<?php

namespace AHT\Block\Controller\Index;


class Delete extends \Magento\Framework\App\Action\Action
{

    protected $_pageFactory;
    protected $_blockFactory;
    protected $resultRedirect;
    protected $_cache;


    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $pageFactory,
        \AHT\Block\Model\BlockFactory $blockFactory,
        \Magento\Framework\Controller\ResultFactory $result,
        \AHT\Block\Block\CacheFont $CacheFont
    ) {
        $this->_pageFactory   = $pageFactory;
        $this->_blockFactory  = $blockFactory;
        $this->resultRedirect = $result;
        $this->_cache         = $CacheFont;

        return parent::__construct($context);
    }

    public function execute()
    {

        $id     = $this->getRequest()->getParam('id');
        $delete = $this->_blockFactory->create()->load($id);
        $delete->delete();

        $this->_cache->delete_Cache();

        $resultRedirect = $this->resultRedirectFactory->create();
        $resultRedirect->setPath('block/index/index');
        return $resultRedirect;
    }
}
