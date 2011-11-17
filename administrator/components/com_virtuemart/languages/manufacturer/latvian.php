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
	'PHPSHOP_MANUFACTURER_LIST_LBL' => 'Ražotāju saraksts',
	'PHPSHOP_MANUFACTURER_LIST_MANUFACTURER_NAME' => 'Ražotāja nosaukums',
	'PHPSHOP_MANUFACTURER_FORM_LBL' => 'Pielikt informāciju',
	'PHPSHOP_MANUFACTURER_FORM_CATEGORY' => 'Ražotāja kategorija',
	'PHPSHOP_MANUFACTURER_FORM_EMAIL' => 'E-pasts',
	'PHPSHOP_MANUFACTURER_CAT_LIST_LBL' => 'Ražotāju kategoriju saraksts',
	'PHPSHOP_MANUFACTURER_CAT_NAME' => 'Kategorijas nosaukums',
	'PHPSHOP_MANUFACTURER_CAT_DESCRIPTION' => 'Kategorijas apraksts',
	'PHPSHOP_MANUFACTURER_CAT_MANUFACTURERS' => 'Ražotāji',
	'PHPSHOP_MANUFACTURER_CAT_FORM_LBL' => 'Ražotāja kategorijas forma',
	'PHPSHOP_MANUFACTURER_CAT_FORM_INFO_LBL' => 'Kategorijas informācija',
	'PHPSHOP_MANUFACTURER_CAT_FORM_NAME' => 'Kategorijas nosaukums',
	'PHPSHOP_MANUFACTURER_CAT_FORM_DESCRIPTION' => 'Kategorijas apraksts'
); $VM_LANG->initModule( 'manufacturer', $langvars );
?>