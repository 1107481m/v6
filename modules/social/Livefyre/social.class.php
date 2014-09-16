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
class Livefyre {

	private $_module 	= array();
	private $_section 	= '';
	
	public function __construct($module = false, $section = null) {
		$this->_module	= $module;	
		$this->_section	= $section;	
	}

	public function getCommunityHTML() {
		if($this->_module['status'] && ($this->_module['location']==$this->_section || $this->_module['location']=='all')) {
			$site_id 	= $this->_module['site_id'];
			return <<<END
<!-- START: Livefyre Embed -->
<script type='text/javascript' src='http://zor.livefyre.com/wjs/v1.0/javascripts/livefyre_init.js'></script>
<script type='text/javascript'>
    var fyre = LF({
        site_id: $site_id
    });
</script>
<!-- END: Livefyre Embed -->
END;
		} else {
			return false;
		}
	}
}