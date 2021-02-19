<?php

namespace AHT\Block\Block;

class Insert extends \Magento\Framework\View\Element\Template
{
    /**
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param array $data
     */

    protected $_pageFactory;
    protected $_blockFactory;

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Framework\View\Result\PageFactory $pageFactory,
        \AHT\Block\Model\BlockFactory $blockFactory
    ) {
        $this->_pageFactory  = $pageFactory;
        $this->_blockFactory = $blockFactory;
        return parent::__construct($context);
    }

    public function execute()
    {
        return $this->_pageFactory->create();
    }
}
