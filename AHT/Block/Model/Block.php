<?php

namespace AHT\Block\Model;


class Block extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface
{
	const CACHE_TAG         = 'block';

	protected $_cacheTag    = 'block';

	protected $_eventPrefix = 'block';

	protected function _construct()
	{
		$this->_init('AHT\Block\Model\ResourceModel\Block');
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
