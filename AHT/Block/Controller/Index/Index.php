<?php

namespace AHT\Block\Controller\Index;

class Index extends \Magento\Framework\App\Action\Action
{
	protected $_pageFactory;
	protected $_blockFactory;

	public function __construct(
		\Magento\Framework\App\Action\Context $context,
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
