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
	'PHPSHOP_RB_INDIVIDUAL' => 'Individuāls produktu saraksts',
	'PHPSHOP_RB_SALE_TITLE' => 'Pārdošanas atskaites',
	'PHPSHOP_RB_SALES_PAGE_TITLE' => 'Pārdošanas aktivitātes skatījums',
	'PHPSHOP_RB_INTERVAL_TITLE' => 'Uzlikt intervālu',
	'PHPSHOP_RB_INTERVAL_MONTHLY_TITLE' => 'Reiz mēnesī',
	'PHPSHOP_RB_INTERVAL_WEEKLY_TITLE' => 'Reiz nedēļā',
	'PHPSHOP_RB_INTERVAL_DAILY_TITLE' => 'Reiz dienā',
	'PHPSHOP_RB_THISMONTH_BUTTON' => 'Šis mēnesis',
	'PHPSHOP_RB_LASTMONTH_BUTTON' => 'Pēdējais mēnesis',
	'PHPSHOP_RB_LAST60_BUTTON' => 'Pēdējās 60 dienas',
	'PHPSHOP_RB_LAST90_BUTTON' => 'Pēdējās 90 dienas',
	'PHPSHOP_RB_START_DATE_TITLE' => 'Sākot no',
	'PHPSHOP_RB_END_DATE_TITLE' => 'Beidzot ar',
	'PHPSHOP_RB_SHOW_SEL_RANGE' => 'Parādīt izvēlēto diapozonu',
	'PHPSHOP_RB_REPORT_FOR' => 'Ziņojums par ',
	'PHPSHOP_RB_DATE' => 'Datums',
	'PHPSHOP_RB_ORDERS' => 'Pasūtījumi',
	'PHPSHOP_RB_TOTAL_ITEMS' => 'Kopā vienību pārdots',
	'PHPSHOP_RB_REVENUE' => 'Ienākums',
	'PHPSHOP_RB_PRODLIST' => 'Produktu saraksts'
); $VM_LANG->initModule( 'reportbasic', $langvars );
?>