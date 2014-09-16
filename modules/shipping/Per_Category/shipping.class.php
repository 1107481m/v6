<?php
/**
 * CubeCart v6
 * ========================================
 * CubeCart is a registered trade mark of CubeCart Limited
 * Copyright CubeCart Limited 2014. All rights reserved.
 * UK Private Limited Company No. 5323904
 * ========================================
 * Web:   http://www.cubecart.com
 * Email:  sales@devellion.com
 * License:  GPL-2.0 http://opensource.org/licenses/GPL-2.0
 */
class Per_Category {
	private $_basket;
	private $_settings;

	public function __construct($basket) {
		## calculate the shipping costs
		$this->_basket	=  $basket;
		$this->_settings = $GLOBALS['config']->get(__CLASS__);
	}

	public function calculate() {
		$value =  $this->_basket['By_Category_Shipping'];
		if ($this->_settings['handling'] > 0) $value	+= $this->_settings['handling'];
		$package[]	= array(
			'id'			=> 0,
			'name'			=> empty($this->_settings['name']) ? '' : $this->_settings['name'],
			'value'			=> $value,
			'tax_id'		=> (int)$this->_settings['tax'],
			'tax_inclusive'	=> (int)$this->_settings['tax_included'],
		);
		return $package;
	}

	public function tracking($tracking_id = null) {
		return false;
	}

}