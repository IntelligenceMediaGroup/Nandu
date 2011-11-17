<?php
if( !defined( '_VALID_MOS' ) && !defined( '_JEXEC' ) ) die( 'Direct Access to '.basename(__FILE__).' is not allowed.' ); 
/**
*
* @package VirtueMart
* @subpackage languages
* @copyright Copyright (C) 2004-2008 soeren - All rights reserved.
* @translator soeren
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL, see LICENSE.php
* VirtueMart is free software. This version may have been modified pursuant
* to the GNU General Public License, and as distributed it includes or
* is derivative of works licensed under the GNU General Public License or
* other free or open source software licenses.
* See /administrator/components/com_virtuemart/COPYRIGHT.php for copyright notices and details.
*
* http://virtuemart.net
*/
global $VM_LANG;
$langvars = array (
	'CHARSET' => 'utf-8',
	'PHPSHOP_USER_FORM_EMAIL' => 'E-pasts',
	'PHPSHOP_SHOPPER_LIST_LBL' => 'Pircēju saraksts',
	'PHPSHOP_SHOPPER_FORM_BILLTO_LBL' => 'Rēķina piestādīšanas informācija',
	'PHPSHOP_SHOPPER_FORM_USERNAME' => 'Lietotājvārds',
	'PHPSHOP_AFFILIATE_MOD' => 'Affiliate Administration',
	'PHPSHOP_AFFILIATE_LIST_LBL' => 'Affiliates List',
	'PHPSHOP_AFFILIATE_LIST_AFFILIATE_NAME' => 'Affiliate Name',
	'PHPSHOP_AFFILIATE_LIST_AFFILIATE_ACTIVE' => 'Active',
	'PHPSHOP_AFFILIATE_LIST_RATE' => 'Rate',
	'PHPSHOP_AFFILIATE_LIST_MONTH_TOTAL' => 'Month Total',
	'PHPSHOP_AFFILIATE_LIST_MONTH_COMMISSION' => 'Month Commission',
	'PHPSHOP_AFFILIATE_LIST_ORDERS' => 'List Orders',
	'PHPSHOP_AFFILIATE_EMAIL_WHO' => 'Kam sūtīt e-pastu(* = ALL)',
	'PHPSHOP_AFFILIATE_EMAIL_CONTENT' => 'Jūsu e-pasts',
	'PHPSHOP_AFFILIATE_EMAIL_SUBJECT' => 'Temats, virsraksts',
	'PHPSHOP_AFFILIATE_EMAIL_STATS' => 'Iekļaut statistiku',
	'PHPSHOP_AFFILIATE_FORM_RATE' => 'Tarifs (procentos)',
	'PHPSHOP_AFFILIATE_FORM_ACTIVE' => 'Aktīvs?',
	'VM_AFFILIATE_SHOWINGDETAILS_FOR' => 'Showing Details for',
	'VM_AFFILIATE_LISTORDERS' => 'List Orders',
	'VM_AFFILIATE_MONTH' => 'Month',
	'VM_AFFILIATE_CHANGEVIEW' => 'Change View',
	'VM_AFFILIATE_ORDERSUMMARY_LBL' => 'Order Summary',
	'VM_AFFILIATE_ORDERLIST_ORDERREF' => 'Order Ref',
	'VM_AFFILIATE_ORDERLIST_DATEORDERED' => 'Date Ordered',
	'VM_AFFILIATE_ORDERLIST_ORDERTOTAL' => 'Order Total',
	'VM_AFFILIATE_ORDERLIST_COMMISSION' => 'Commission (rate)',
	'VM_AFFILIATE_ORDERLIST_ORDERSTATUS' => 'Order Status'
); $VM_LANG->initModule( 'affiliate', $langvars );
?>