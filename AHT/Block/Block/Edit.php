<?php

namespace AHT\Block\Block;

class Edit extends \Magento\Framework\View\Element\Template
{
    /**
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param array $data
     */
    protected $_pageFactory;
    protected $_blockFactory;
    protected $_request;

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Framework\View\Result\PageFactory $pageFactory,
        \AHT\Block\Model\BlockFactory $blockFactory,
        \Magento\Framework\App\Request\Http $request
    ) {
        $this->_pageFactory = $pageFactory;
        $this->_blockFactory = $blockFactory;
        $this->_request = $request;
        return parent::__construct($context);
    }

    public function execute()
    {
        return $this->_pageFactory->create();
    }

    public function getId()
    {

        $urlId = $this->_request->getParam('id');
        return $urlId;
    }

    public function getBlock($fieldName)
    {
        $block = $this->_blockFactory->create()->load($this->getId());
        $name  = $block->getData($fieldName);
        return $name;
    }
}
