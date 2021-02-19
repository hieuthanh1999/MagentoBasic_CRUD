<?php

namespace AHT\Block\Setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class InstallData implements InstallDataInterface
{
	protected $_blockFactory;

	public function __construct(\AHT\Block\Model\BlockFactory $blockFactory)
	{
		$this->_blockFactory = $blockFactory;
	}

	public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
	{

		$data = [
			'title' 		   => "Test 1",
			'description'      => "description 1"
		];

		$block = $this->_blockFactory->create();
		$block->addData($data)->save();
	}
}
