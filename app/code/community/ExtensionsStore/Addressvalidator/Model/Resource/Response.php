<?php

/**
 * Response resource model
 *
 * @category   ExtensionsStore
 * @package    ExtensionsStore_Addressvalidator
 * @author     Extensions Store <admin@extensions-store.com>
 */
class ExtensionsStore_Addressvalidator_Model_Resource_Response extends Mage_Core_Model_Resource_Db_Abstract {
	protected function _construct() {
		$this->_init ( 'extensions_store_addressvalidator/response', 'id' );
	}
}

