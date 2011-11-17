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
	'PHPSHOP_ZONE_ASSIGN_COUNTRY_LBL' => 'Valsts',
	'PHPSHOP_ZONE_ASSIGN_ASSIGN_LBL' => 'Piešķirt pie zonas',
	'PHPSHOP_ASSIGN_ZONE_PG_LBL' => 'Piešķirt zonas',
	'PHPSHOP_ZONE_FORM_NAME_LBL' => 'Zonas nosaukums',
	'PHPSHOP_ZONE_FORM_DESC_LBL' => 'Zonas apraksts',
	'PHPSHOP_ZONE_FORM_COST_PER_LBL' => 'Zonas izmaksas par vienību',
	'PHPSHOP_ZONE_FORM_COST_LIMIT_LBL' => 'Zonas izmaksu limits',
	'PHPSHOP_ZONE_LIST_LBL' => 'Zonu saraksts',
	'PHPSHOP_ZONE_LIST_NAME_LBL' => 'Zonas nosaukums',
	'PHPSHOP_ZONE_LIST_DESC_LBL' => 'Zonas apraksts',
	'PHPSHOP_ZONE_LIST_COST_PER_LBL' => 'Zonas izmaksas par vienību',
	'PHPSHOP_ZONE_LIST_COST_LIMIT_LBL' => 'Zonaz izmaksu limits',
	'VM_ZONE_ASSIGN_PERITEM' => 'Per Item',
	'VM_ZONE_ASSIGN_LIMIT' => 'Limit',
	'VM_ZONE_EDITZONE' => 'Edit This Zone'
); $VM_LANG->initModule( 'zone', $langvars );
?>