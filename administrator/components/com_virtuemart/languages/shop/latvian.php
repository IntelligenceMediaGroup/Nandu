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
	'PHPSHOP_BROWSE_LBL' => 'Pārlūkot',
	'PHPSHOP_FLYPAGE_LBL' => 'Produkta apraksts',
	'PHPSHOP_PRODUCT_FORM_EDIT_PRODUCT' => 'Labot šo produktu',
	'PHPSHOP_DOWNLOADS_START' => 'Start Download',
	'PHPSHOP_DOWNLOADS_INFO' => 'Please enter the Download-ID you\'ve got in the e-mail and click \'Start Download\'.',
	'PHPSHOP_WAITING_LIST_MESSAGE' => 'Please enter your e-mail address below to be notified when this product comes back in stock. 
                                        We will not share, rent, sell or use this e-mail address for any other purpose other than to 
                                        tell you when the product is back in stock.<br /><br />Thank you!',
	'PHPSHOP_WAITING_LIST_THANKS' => 'Thanks for waiting! <br />We will let you know as soon as we get our inventory.',
	'PHPSHOP_WAITING_LIST_NOTIFY_ME' => 'Paziņot man!',
	'PHPSHOP_SEARCH_ALL_CATEGORIES' => 'Meklēt visās kategorijās',
	'PHPSHOP_SEARCH_ALL_PRODINFO' => 'Meklēt visos produktu aprakstos',
	'PHPSHOP_SEARCH_PRODNAME' => 'Tikai produktu nosaukums',
	'PHPSHOP_SEARCH_MANU_VENDOR' => 'Tikai ražotāja nosaukums',
	'PHPSHOP_SEARCH_DESCRIPTION' => 'Tikai produkta apraksts',
	'PHPSHOP_SEARCH_AND' => 'un',
	'PHPSHOP_SEARCH_NOT' => 'ne',
	'PHPSHOP_SEARCH_TEXT1' => 'Pirmais saraksts ļauj Jums izvēlēties kategoriju kurā veikt meklēšanu. 
        Otrais saraksts ļauj Jums izvēlēties meklēšanas kritēriju. 
        Kad Jūs ievadijāt šo informāciju, varat sākt meklēšanu. ',
	'PHPSHOP_SEARCH_TEXT2' => ' Jūs varat arī padziļināt meklēšanu izmantojot loģiskos "un" un "ne"
        Izvēloties UN tiks meklēti abi jaunie produkti. 
        Izvēloties NE, tiks meklēti produkti kuros nav ievadītais vārds.',
	'PHPSHOP_CONTINUE_SHOPPING' => 'Turpināt iepirkties',
	'PHPSHOP_AVAILABLE_IMAGES' => 'Ir pieejami attēli',
	'PHPSHOP_BACK_TO_DETAILS' => 'Atpakaļ pie produkta apraksta',
	'PHPSHOP_IMAGE_NOT_FOUND' => 'Attēls nav atrasts!',
	'PHPSHOP_PARAMETER_SEARCH_TEXT1' => 'Jūs atradīsiet produktus balstoties tikai uz tehniskajiem parametriem?<BR>Jūs varat lietot tikai sagatavotu formu:',
	'PHPSHOP_PARAMETER_SEARCH_NO_PRODUCT_TYPE' => 'Es atvainojos. Nav katogorijas ko meklēt.',
	'PHPSHOP_PARAMETER_SEARCH_BAD_PRODUCT_TYPE' => 'Es atvainojos. Nav nevienas publicēta produkta tipa ar šādu nosaukumu.',
	'PHPSHOP_PARAMETER_SEARCH_IS_LIKE' => 'Ir kā',
	'PHPSHOP_PARAMETER_SEARCH_IS_NOT_LIKE' => 'Nav kā',
	'PHPSHOP_PARAMETER_SEARCH_FULLTEXT' => 'Pilna teksta meklēšana',
	'PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ALL' => 'Atlasīt visu',
	'PHPSHOP_PARAMETER_SEARCH_FIND_IN_SET_ANY' => 'Atlasīt jebko',
	'PHPSHOP_PARAMETER_SEARCH_RESET_FORM' => 'Pārlikt formu',
	'PHPSHOP_PRODUCT_NOT_FOUND' => 'Atvainojos, bet produkts nav atrasts!',
	'PHPSHOP_PRODUCT_PACKAGING1' => 'Skaits {unit}i pakā:',
	'PHPSHOP_PRODUCT_PACKAGING2' => 'Skaits {unit}i kastē:',
	'PHPSHOP_CART_PRICE_PER_UNIT' => 'Cena par gabalu',
	'VM_PRODUCT_ENQUIRY_LBL' => 'Ask a question about this product',
	'VM_RECOMMEND_FORM_LBL' => 'Recommend this product to a friend',
	'PHPSHOP_EMPTY_YOUR_CART' => 'Empty Cart',
	'VM_RETURN_TO_PRODUCT' => 'Return to product',
	'EMPTY_CATEGORY' => 'This Category is currently empty.',
	'ENQUIRY' => 'Enquiry',
	'NAME_PROMPT' => 'Enter your Name',
	'EMAIL_PROMPT' => 'E-mail Address',
	'MESSAGE_PROMPT' => 'Enter your Message',
	'SEND_BUTTON' => 'Send',
	'THANK_MESSAGE' => 'Thank you for your Enquiry. We will contact you as soon as possible.',
	'PROMPT_CLOSE' => 'Close',
	'VM_RECOVER_CART_REPLACE' => 'Replace Cart with Saved Cart',
	'VM_RECOVER_CART_MERGE' => 'Add Saved Cart to Current Cart',
	'VM_RECOVER_CART_DELETE' => 'Delete Saved Cart',
	'VM_EMPTY_YOUR_CART_TIP' => 'Clear the cart of all contents',
	'VM_SAVED_CART_TITLE' => 'Saved Cart',
	'VM_SAVED_CART_RETURN' => 'Return'
); $VM_LANG->initModule( 'shop', $langvars );
?>