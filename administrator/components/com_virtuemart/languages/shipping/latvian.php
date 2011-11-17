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
	'PHPSHOP_CARRIER_LIST_LBL' => 'Piegādātāju saraksts',
	'PHPSHOP_RATE_LIST_LBL' => 'Piegādes izmaksu veidu saraksts',
	'PHPSHOP_CARRIER_LIST_NAME_LBL' => 'Nosaukums',
	'PHPSHOP_CARRIER_LIST_ORDER_LBL' => 'Listorder',
	'PHPSHOP_CARRIER_FORM_LBL' => 'Rediģēt piegādātāju / izveidot jaunu',
	'PHPSHOP_RATE_FORM_LBL' => 'Izveidot/rediģēt piegādātāja cenrādi',
	'PHPSHOP_RATE_FORM_NAME' => 'Piegādes cenrāža informācija',
	'PHPSHOP_RATE_FORM_CARRIER' => 'Piegādātājs',
	'PHPSHOP_RATE_FORM_COUNTRY' => 'Valsts',
	'PHPSHOP_RATE_FORM_ZIP_START' => 'Indekss, sākums',
	'PHPSHOP_RATE_FORM_ZIP_END' => 'Indekss, beigas',
	'PHPSHOP_RATE_FORM_WEIGHT_START' => 'Vieglākais',
	'PHPSHOP_RATE_FORM_WEIGHT_END' => 'Smagākais',
	'PHPSHOP_RATE_FORM_PACKAGE_FEE' => 'Jūsu pakas izcenojums',
	'PHPSHOP_RATE_FORM_CURRENCY' => 'Valūta',
	'PHPSHOP_RATE_FORM_LIST_ORDER' => 'Parādīt pasūtījuma sarakstu',
	'PHPSHOP_SHIPPING_RATE_LIST_CARRIER_LBL' => 'Piegādātājs',
	'PHPSHOP_SHIPPING_RATE_LIST_RATE_NAME' => 'Piegādes cenrāža apraksts',
	'PHPSHOP_SHIPPING_RATE_LIST_RATE_WSTART' => 'Sver no ...',
	'PHPSHOP_SHIPPING_RATE_LIST_RATE_WEND' => '... līdz',
	'PHPSHOP_CARRIER_FORM_NAME' => 'Piegādātāja uzņēmums',
	'PHPSHOP_CARRIER_FORM_LIST_ORDER' => 'Listorder'
); $VM_LANG->initModule( 'shipping', $langvars );
?>