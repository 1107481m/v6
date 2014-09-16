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
if(!defined('CC_INI_SET')) die('Access Denied');
$accountID = ($module['accid'] == "") ? "default1" : $module['accid'];
$amount = ($module['price_mode'] == 'subtotal') ? $this->_basket['subtotal'] : $this->_basket['total'];
$orderid = $this->_basket['cart_order_id'];

$affCode = '<!-- Post Affiliate Pro integration snippet -->'."\n".
  '<script id="pap_x2s6df8d" src="'.$module['URL'].'scripts/salejs.php" type="text/javascript">'.
  '</script>'.
  '<script type="text/javascript">'."\n".
  'PostAffTracker.setAccountId(\''.$accountID.'\');'."\n".
  'var sale = PostAffTracker.createSale();'."\n".
  'sale.setTotalCost(\''.$amount.'\');'."\n".
  'sale.setOrderID(\''.$orderid.'\');'."\n".
  'PostAffTracker.register();'."\n".
  '</script>'."\n";