<?php
namespace AHT\Block\Block;

class CacheFont
{
    private $_cacheTypeList;
    private $_cacheFrontendPool;
    
    public function __construct(
        \Magento\Framework\App\Cache\TypeListInterface $cacheTypeList,
		\Magento\Framework\App\Cache\Frontend\Pool $cacheFrontendPool
    ) {
        $this->_cacheTypeList     = $cacheTypeList;
		$this->_cacheFrontendPool = $cacheFrontendPool;
    }

    public function delete_Cache()
    {
        $types = ['config', 'layout', 'block_html', 'collections', 'reflection', 'db_ddl', 'compiled_config', 'eav', 'config_integration', 'config_integration_api', 'full_page', 'translate', 'config_webservice', 'vertex'];
		foreach ($types as $type) {
			$this->_cacheTypeList->cleanType($type);
		}
		foreach ($this->_cacheFrontendPool as $cacheFrontend) {
			$cacheFrontend->getBackend()->clean();
		}

    }
}
