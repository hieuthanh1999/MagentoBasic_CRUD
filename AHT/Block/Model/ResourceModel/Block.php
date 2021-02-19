<?php

namespace AHT\Block\Model\ResourceModel;


class Block extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{

	public function __construct(
		\Magento\Framework\Model\ResourceModel\Db\Context $context
	) {
		parent::__construct($context);
	}

	protected function _construct()
	{
		$this->_init('block', 'id');
	}
}
