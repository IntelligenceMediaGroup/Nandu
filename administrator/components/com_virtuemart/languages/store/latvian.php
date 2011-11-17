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
	'PHPSHOP_USER_FORM_FIRST_NAME' => 'Vârds',
	'PHPSHOP_USER_FORM_LAST_NAME' => 'Uzvârds',
	'PHPSHOP_USER_FORM_MIDDLE_NAME' => 'Uzvârds',
	'PHPSHOP_USER_FORM_COMPANY_NAME' => 'Uzòçmuma nosaukums',
	'PHPSHOP_USER_FORM_ADDRESS_1' => 'Addrese 1',
	'PHPSHOP_USER_FORM_ADDRESS_2' => 'Addrese 2',
	'PHPSHOP_USER_FORM_CITY' => 'Pilsçta',
	'PHPSHOP_USER_FORM_STATE' => 'Reìions',
	'PHPSHOP_USER_FORM_ZIP' => 'Pasta indeks',
	'PHPSHOP_USER_FORM_COUNTRY' => 'Valsts',
	'PHPSHOP_USER_FORM_PHONE' => 'Tâlrunis',
	'PHPSHOP_USER_FORM_PHONE2' => 'Mibilais tâlrunis',
	'PHPSHOP_USER_FORM_FAX' => 'Fakss',
	'PHPSHOP_ISSHIP_LIST_PUBLISH_LBL' => 'Aktîvs',
	'PHPSHOP_ISSHIP_FORM_UPDATE_LBL' => 'Konfigurçt piegâdes metodes',
	'PHPSHOP_STORE_FORM_FULL_IMAGE' => 'Pilns attçls',
	'PHPSHOP_STORE_FORM_UPLOAD' => 'Augðupielâdçt attçlu',
	'PHPSHOP_STORE_FORM_STORE_NAME' => 'Store Name',
	'PHPSHOP_STORE_FORM_COMPANY_NAME' => 'Veikala uzòçmuma nosaukums',
	'PHPSHOP_STORE_FORM_ADDRESS_1' => 'Addrese 1',
	'PHPSHOP_STORE_FORM_ADDRESS_2' => 'Addrese 2',
	'PHPSHOP_STORE_FORM_CITY' => 'Pilsçta',
	'PHPSHOP_STORE_FORM_STATE' => 'Reìions',
	'PHPSHOP_STORE_FORM_COUNTRY' => 'Valsts',
	'PHPSHOP_STORE_FORM_ZIP' => 'Indekss',
	'PHPSHOP_STORE_FORM_CURRENCY' => 'Valûta',
	'PHPSHOP_STORE_FORM_LAST_NAME' => 'Uzvârds',
	'PHPSHOP_STORE_FORM_FIRST_NAME' => 'Vârds',
	'PHPSHOP_STORE_FORM_MIDDLE_NAME' => 'Uzvârds',
	'PHPSHOP_STORE_FORM_TITLE' => 'Nosaukums',
	'PHPSHOP_STORE_FORM_PHONE_1' => 'Tâlrunis 1',
	'PHPSHOP_STORE_FORM_PHONE_2' => 'Tâlrunis 2',
	'PHPSHOP_STORE_FORM_DESCRIPTION' => 'Apraksts',
	'PHPSHOP_PAYMENT_METHOD_LIST_LBL' => 'Maksâjumu metoþu saraksts',
	'PHPSHOP_PAYMENT_METHOD_LIST_NAME' => 'Nosaukums',
	'PHPSHOP_PAYMENT_METHOD_LIST_CODE' => 'Kods',
	'PHPSHOP_PAYMENT_METHOD_LIST_SHOPPER_GROUP' => 'Pircçju grupa',
	'PHPSHOP_PAYMENT_METHOD_LIST_ENABLE_PROCESSOR' => 'Maksâjuma metodes tips',
	'PHPSHOP_PAYMENT_METHOD_FORM_LBL' => 'Maksâjuma metodes forma',
	'PHPSHOP_PAYMENT_METHOD_FORM_NAME' => 'Maksâjuma metodes nosaukums',
	'PHPSHOP_PAYMENT_METHOD_FORM_SHOPPER_GROUP' => 'Pircçju grupa',
	'PHPSHOP_PAYMENT_METHOD_FORM_DISCOUNT' => 'Atlaide',
	'PHPSHOP_PAYMENT_METHOD_FORM_CODE' => 'Kods',
	'PHPSHOP_PAYMENT_METHOD_FORM_LIST_ORDER' => 'Parâdît pasûtîjumus',
	'PHPSHOP_PAYMENT_METHOD_FORM_ENABLE_PROCESSOR' => 'Maksâjumu metodes tips',
	'PHPSHOP_PAYMENT_FORM_CC' => 'Kredîtkarte',
	'PHPSHOP_PAYMENT_FORM_USE_PP' => 'Lietojiet maksâjuma procesoru',
	'PHPSHOP_PAYMENT_FORM_BANK_DEBIT' => 'Bankas debets',
	'PHPSHOP_PAYMENT_FORM_AO' => 'Tikai adrese / Samaksa uz vietas',
	'PHPSHOP_STATISTIC_STATISTICS' => 'Statistika',
	'PHPSHOP_STATISTIC_CUSTOMERS' => 'Klienti',
	'PHPSHOP_STATISTIC_ACTIVE_PRODUCTS' => 'aktîvie produkti',
	'PHPSHOP_STATISTIC_INACTIVE_PRODUCTS' => 'nealtîvie produkti',
	'PHPSHOP_STATISTIC_NEW_ORDERS' => 'Jauni pasûtîjumi',
	'PHPSHOP_STATISTIC_NEW_CUSTOMERS' => 'Jauni klienti',
	'PHPSHOP_CREDITCARD_NAME' => 'Credit Card Name',
	'PHPSHOP_CREDITCARD_CODE' => 'Credit Card - Short Code',
	'PHPSHOP_YOUR_STORE' => 'Jûsu veikals',
	'PHPSHOP_CONTROL_PANEL' => 'Kontrolpanelis',
	'PHPSHOP_CHANGE_PASSKEY_FORM' => 'Show/Change the Password/Transaction Key',
	'PHPSHOP_TYPE_PASSWORD' => 'Please type in your User Password',
	'PHPSHOP_CURRENT_TRANSACTION_KEY' => 'Current Transaction Key',
	'PHPSHOP_CHANGE_PASSKEY_SUCCESS' => 'The Transaction key was successfully changed.',
	'VM_PAYMENT_CLASS_NAME' => 'Payment class name',
	'VM_PAYMENT_CLASS_NAME_TIP' => '(e.g. <strong>ps_netbanx</strong>) :<br />
		default: ps_payment<br />
		<em>Choose ps_payment if you\'re not sure what to choose!</em>',
	'VM_PAYMENT_EXTRAINFO' => 'Payment Extra Info',
	'VM_PAYMENT_EXTRAINFO_TIP' => 'Is shown on the Order Confirmation Page. Can be: HTML Form Code from your Payment Service Provider, Hints to the customer etc.',
	'VM_PAYMENT_ACCEPTED_CREDITCARDS' => 'Accepted Credit Card Types',
	'VM_PAYMENT_METHOD_DISCOUNT_TIP' => 'To turn the discount into a fee, use a negative value here (Example: <strong>-2.00</strong>).',
	'VM_PAYMENT_METHOD_DISCOUNT_MAX_AMOUNT' => 'Maximum discount amount',
	'VM_PAYMENT_METHOD_DISCOUNT_MIN_AMOUNT' => 'Minimum discount amount',
	'VM_PAYMENT_FORM_FORMBASED' => 'HTML-Form based (e.g. PayPal)',
	'VM_ORDER_EXPORT_MODULE_LIST_LBL' => 'Export Module List',
	'VM_ORDER_EXPORT_MODULE_LIST_NAME' => 'Name',
	'VM_ORDER_EXPORT_MODULE_LIST_DESC' => 'Description',
	'VM_STORE_FORM_ACCEPTED_CURRENCIES' => 'List of accepted currencies',
	'VM_STORE_FORM_ACCEPTED_CURRENCIES_TIP' => 'This list defines all those currencies you accept when people are buying something in your store. <strong>Note:</strong> All currencies selected here can be used at checkout! If you don\'t want that, just select your country\'s currency (=default).',
	'VM_EXPORT_MODULE_FORM_LBL' => 'Export Module Form',
	'VM_EXPORT_MODULE_FORM_NAME' => 'Export Module Name',
	'VM_EXPORT_MODULE_FORM_DESC' => 'Description',
	'VM_EXPORT_CLASS_NAME' => 'Export Class Name',
	'VM_EXPORT_CLASS_NAME_TIP' => '(e.g. <strong>ps_orders_csv</strong>) :<br /> default: ps_xmlexport<br /> <i>Leave blank if you\'re not sure what to fill in!</i>',
	'VM_EXPORT_CONFIG' => 'Export Extra Configuration',
	'VM_EXPORT_CONFIG_TIP' => 'Define Export configuration for user-defined export modules or define additional configuration. Code must be valid PHP-Code.',
	'VM_SHIPPING_MODULE_LIST_NAME' => 'Name',
	'VM_SHIPPING_MODULE_LIST_E_VERSION' => 'Version',
	'VM_SHIPPING_MODULE_LIST_HEADER_AUTHOR' => 'Author',
	'PHPSHOP_STORE_ADDRESS_FORMAT' => 'Store Address Format',
	'PHPSHOP_STORE_ADDRESS_FORMAT_TIP' => 'You can use the following placeholders here',
	'PHPSHOP_STORE_DATE_FORMAT' => 'Store Date Format',
	'VM_PAYMENT_METHOD_ID_NOT_PROVIDED' => 'Error: Payment Method ID was not provided.',
	'VM_SHIPPING_MODULE_CONFIG_LBL' => 'Shipping Module Configuration',
	'VM_SHIPPING_MODULE_CLASSERROR' => 'Could not instantiate Class {shipping_module}'
); $VM_LANG->initModule( 'store', $langvars );
?>