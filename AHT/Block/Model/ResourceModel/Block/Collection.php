<?php

namespace AHT\Block\Model\ResourceModel\Block;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
	protected $_idFieldName = 'id';
	protected $_eventPrefix = 'aht_block_collection';
	protected $_eventObject = 'block_collection';

	/**
	 * Define resource model
	 *
	 * @return void
	 */
	protected function _construct()
	{
		$this->_init('AHT\Block\Model\Block', 'AHT\Block\Model\ResourceModel\Block');
	}
}
