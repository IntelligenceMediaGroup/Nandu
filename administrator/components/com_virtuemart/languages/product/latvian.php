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
	'PHPSHOP_MODULE_LIST_ORDER' => 'Pasūtījumu liste',
	'PHPSHOP_PRODUCT_INVENTORY_LBL' => 'Produktu uzskaite',
	'PHPSHOP_PRODUCT_INVENTORY_STOCK' => 'Numurs',
	'PHPSHOP_PRODUCT_INVENTORY_WEIGHT' => 'Svars',
	'PHPSHOP_PRODUCT_LIST_PUBLISH' => 'Publicēt',
	'PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE' => 'Meklēt produktu',
	'PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_TYPE_PRODUCT' => 'labots',
	'PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_TYPE_PRICE' => 'ar labotu cenu',
	'PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_TYPE_WITHOUTPRICE' => 'bez cenas',
	'PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_AFTER' => 'Pēc',
	'PHPSHOP_PRODUCT_LIST_SEARCH_BY_DATE_BEFORE' => 'Pirms',
	'PHPSHOP_PRODUCT_FORM_SHOW_FLYPAGE' => 'Parādīt šo produktu veikalā',
	'PHPSHOP_PRODUCT_FORM_NEW_PRODUCT_LBL' => 'Jauns produkts',
	'PHPSHOP_PRODUCT_FORM_PRODUCT_INFO_LBL' => 'Produkta informācija',
	'PHPSHOP_PRODUCT_FORM_PRODUCT_STATUS_LBL' => 'Produkta status',
	'PHPSHOP_PRODUCT_FORM_PRODUCT_DIM_WEIGHT_LBL' => 'Produkta dimensijas un svars',
	'PHPSHOP_PRODUCT_FORM_PRODUCT_IMAGES_LBL' => 'Produkta attēli',
	'PHPSHOP_PRODUCT_FORM_UPDATE_ITEM_LBL' => 'Atjaunināt vienību',
	'PHPSHOP_PRODUCT_FORM_ITEM_INFO_LBL' => 'Vienības informācija',
	'PHPSHOP_PRODUCT_FORM_ITEM_STATUS_LBL' => 'Vienības status',
	'PHPSHOP_PRODUCT_FORM_ITEM_DIM_WEIGHT_LBL' => 'Vienības dimensijas un svars',
	'PHPSHOP_PRODUCT_FORM_ITEM_IMAGES_LBL' => 'Vienības attēli',
	'PHPSHOP_PRODUCT_FORM_IMAGE_UPDATE_LBL' => 'Lai atjaunotu esošo attēlu, ierakstiet jaunā attēla adresi.',
	'PHPSHOP_PRODUCT_FORM_IMAGE_DELETE_LBL' => 'Izdzēst šo attēlu.',
	'PHPSHOP_PRODUCT_FORM_PRODUCT_ITEMS_LBL' => 'Produktu vienības',
	'PHPSHOP_PRODUCT_FORM_ITEM_ATTRIBUTES_LBL' => 'Vienību atribūti',
	'PHPSHOP_PRODUCT_FORM_DELETE_PRODUCT_MSG' => 'Vai Jūs tiešām vēlaties izdzēst šo Produktunun vienības kas ir saistītas ar to?',
	'PHPSHOP_PRODUCT_FORM_DELETE_ITEM_MSG' => 'Vai Jūs tiešām vēlaties izdzēst šo vienību?',
	'PHPSHOP_PRODUCT_FORM_MANUFACTURER' => 'Ražotājs',
	'PHPSHOP_PRODUCT_FORM_SKU' => 'SKU',
	'PHPSHOP_PRODUCT_FORM_NAME' => 'Nosaukums',
	'PHPSHOP_PRODUCT_FORM_CATEGORY' => 'Kategorija',
	'PHPSHOP_PRODUCT_FORM_AVAILABLE_DATE' => 'Pieejamības datums',
	'PHPSHOP_PRODUCT_FORM_SPECIAL' => 'Speciālajos piedāvājumos',
	'PHPSHOP_PRODUCT_FORM_DISCOUNT_TYPE' => 'Atlaižu tips',
	'PHPSHOP_PRODUCT_FORM_PUBLISH' => 'Publicēt?',
	'PHPSHOP_PRODUCT_FORM_LENGTH' => 'Garums',
	'PHPSHOP_PRODUCT_FORM_WIDTH' => 'Platums',
	'PHPSHOP_PRODUCT_FORM_HEIGHT' => 'Augstums',
	'PHPSHOP_PRODUCT_FORM_DIMENSION_UOM' => 'Mērvienība',
	'PHPSHOP_PRODUCT_FORM_WEIGHT_UOM' => 'Mērvienība',
	'PHPSHOP_PRODUCT_FORM_FULL_IMAGE' => 'Pilns attēls',
	'PHPSHOP_PRODUCT_FORM_WEIGHT_UOM_DEFAULT' => 'poundi',
	'PHPSHOP_PRODUCT_FORM_DIMENSION_UOM_DEFAULT' => 'collas',
	'PHPSHOP_PRODUCT_FORM_PACKAGING' => 'Vienības pakā',
	'PHPSHOP_PRODUCT_FORM_PACKAGING_DESCRIPTION' => 'Šeit Jūs varat ierakstīt cik vienības ir vienā pakā. (max. 65535)',
	'PHPSHOP_PRODUCT_FORM_BOX' => 'Vienības kastē',
	'PHPSHOP_PRODUCT_FORM_BOX_DESCRIPTION' => 'Šeit Jūs varat ierakstīt cik vienības ir kastē. (max. 65535)',
	'PHPSHOP_PRODUCT_DISPLAY_ADD_PRODUCT_LBL' => 'Product Add Results',
	'PHPSHOP_PRODUCT_DISPLAY_UPDATE_PRODUCT_LBL' => 'Product Update Results',
	'PHPSHOP_PRODUCT_DISPLAY_ADD_ITEM_LBL' => 'Item Add Results',
	'PHPSHOP_PRODUCT_DISPLAY_UPDATE_ITEM_LBL' => 'Item Update Results',
	'PHPSHOP_CATEGORY_FORM_LBL' => 'Kategorijas informācija',
	'PHPSHOP_CATEGORY_FORM_NAME' => 'Kategorijas nosaukums',
	'PHPSHOP_CATEGORY_FORM_PARENT' => 'Vecāks',
	'PHPSHOP_CATEGORY_FORM_DESCRIPTION' => 'Kategorijas apraksts',
	'PHPSHOP_CATEGORY_FORM_PUBLISH' => 'Publicēt?',
	'PHPSHOP_CATEGORY_FORM_FLYPAGE' => 'Kategorijas Flypage',
	'PHPSHOP_ATTRIBUTE_LIST_LBL' => 'Attribute List for',
	'PHPSHOP_ATTRIBUTE_LIST_NAME' => 'Atribūta nosaukums',
	'PHPSHOP_ATTRIBUTE_LIST_ORDER' => 'Pasūtījumu saraksts',
	'PHPSHOP_ATTRIBUTE_FORM_LBL' => 'Atribūta forma',
	'PHPSHOP_ATTRIBUTE_FORM_NEW_FOR_PRODUCT' => 'Jauns atribūts produktam',
	'PHPSHOP_ATTRIBUTE_FORM_UPDATE_FOR_PRODUCT' => 'Atjaunināt atribūtu produktam',
	'PHPSHOP_ATTRIBUTE_FORM_NEW_FOR_ITEM' => 'Jauns atribūts vienībai',
	'PHPSHOP_ATTRIBUTE_FORM_UPDATE_FOR_ITEM' => 'Atjaunināt atribūtu vienībai',
	'PHPSHOP_ATTRIBUTE_FORM_NAME' => 'Atribūta nosaukums',
	'PHPSHOP_ATTRIBUTE_FORM_ORDER' => 'Pasūtījumu saraksts',
	'PHPSHOP_PRICE_LIST_FOR_LBL' => 'Cena priekš',
	'PHPSHOP_PRICE_LIST_GROUP_NAME' => 'Grupas nosaukums',
	'PHPSHOP_PRICE_LIST_PRICE' => 'Cena',
	'PHPSHOP_PRODUCT_LIST_CURRENCY' => 'Valūta',
	'PHPSHOP_PRICE_FORM_LBL' => 'Cenas informācija',
	'PHPSHOP_PRICE_FORM_NEW_FOR_PRODUCT' => 'Jauna cena produktam',
	'PHPSHOP_PRICE_FORM_UPDATE_FOR_PRODUCT' => 'Atjaunināt cenu produktam',
	'PHPSHOP_PRICE_FORM_NEW_FOR_ITEM' => 'Jauna cena vienībai',
	'PHPSHOP_PRICE_FORM_UPDATE_FOR_ITEM' => 'Atjaunināt cenu vienībai',
	'PHPSHOP_PRICE_FORM_PRICE' => 'Cena',
	'PHPSHOP_PRICE_FORM_CURRENCY' => 'Valūta',
	'PHPSHOP_PRICE_FORM_GROUP' => 'Pircēju grupa',
	'PHPSHOP_LEAVE_BLANK' => '(atstājiet tukšu ja Jums nav <br />personīga php-faila priekš tā!)',
	'PHPSHOP_PRODUCT_FORM_ITEM_LBL' => 'Item',
	'PHPSHOP_PRODUCT_DISCOUNT_STARTDATE' => 'Startdate of discount',
	'PHPSHOP_PRODUCT_DISCOUNT_STARTDATE_TIP' => 'Specifies the day when the discount begins',
	'PHPSHOP_PRODUCT_DISCOUNT_ENDDATE' => 'End date of discount',
	'PHPSHOP_PRODUCT_DISCOUNT_ENDDATE_TIP' => 'Specifies the day when the discount ends',
	'PHPSHOP_FILEMANAGER_PUBLISHED' => 'Publicēts?',
	'PHPSHOP_FILES_LIST' => 'FileManager::Image/File List for',
	'PHPSHOP_FILES_LIST_FILENAME' => 'Filename',
	'PHPSHOP_FILES_LIST_FILETITLE' => 'File Title',
	'PHPSHOP_FILES_LIST_FILETYPE' => 'File Type',
	'PHPSHOP_FILES_LIST_FULL_IMG' => 'Pilns attēls',
	'PHPSHOP_FILES_LIST_THUMBNAIL_IMG' => 'Samazināts attēls',
	'PHPSHOP_FILES_FORM' => 'Augšupielādēt attēlu priekš',
	'PHPSHOP_FILES_FORM_CURRENT_FILE' => 'Esošais fails',
	'PHPSHOP_FILES_FORM_FILE' => 'Fails',
	'PHPSHOP_FILES_FORM_IMAGE' => 'Attēls',
	'PHPSHOP_FILES_FORM_UPLOAD_TO' => 'Augšupielādēt uz',
	'PHPSHOP_FILES_FORM_UPLOAD_IMAGEPATH' => 'default Product Image Path',
	'PHPSHOP_FILES_FORM_UPLOAD_OWNPATH' => 'Specify the file location',
	'PHPSHOP_FILES_FORM_UPLOAD_DOWNLOADPATH' => 'Lejuplāde uz ',
	'PHPSHOP_FILES_FORM_AUTO_THUMBNAIL' => 'Aktivizēt automātisku mazo attēlu izveidošanu?',
	'PHPSHOP_FILES_FORM_FILE_PUBLISHED' => 'Fails ir publicēts?',
	'PHPSHOP_FILES_FORM_FILE_TITLE' => 'Faila nosaukums (kuru redz klients)',
	'PHPSHOP_FILES_FORM_FILE_URL' => 'Faila URL (optional)',
	'PHPSHOP_PRODUCT_FORM_AVAILABILITY_TOOLTIP1' => 'Fill in any text here that will be displayed to the customer on the product flypage.<br />e.g.: 24h, 48 hours, 3 - 5 days, On Order.....',
	'PHPSHOP_PRODUCT_FORM_AVAILABILITY_TOOLTIP2' => 'OR select an Image to be displayed on the Details Page (flypage).<br />The images reside in the directory <i>/components/com_virtuemart/shop_image/availability</i><br />',
	'PHPSHOP_PRODUCT_FORM_CUSTOM_ATTRIBUTE_LIST_EXAMPLES' => '<h4>Examples for the Custom attribute List Format:</h4>
        <pre>Name;Extras;</strong>...</pre>',
	'PHPSHOP_IMAGE_ACTION' => 'Image Action',
	'PHPSHOP_PARAMETERS_LBL' => 'Parametri',
	'PHPSHOP_PRODUCT_TYPE_LBL' => 'Produkta tips',
	'PHPSHOP_PRODUCT_PRODUCT_TYPE_LIST_LBL' => 'Produktu tipu saraksts priekš',
	'PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_LBL' => 'Pielikt produktu tipu priekš',
	'PHPSHOP_PRODUCT_PRODUCT_TYPE_FORM_PRODUCT_TYPE' => 'Produkta tips',
	'PHPSHOP_PRODUCT_TYPE_FORM_NAME' => 'Produkta tipa nosaukums',
	'PHPSHOP_PRODUCT_TYPE_FORM_DESCRIPTION' => 'Produkta tipa apraksts',
	'PHPSHOP_PRODUCT_TYPE_FORM_PARAMETERS' => 'Parametri',
	'PHPSHOP_PRODUCT_TYPE_FORM_LBL' => 'Produkta tipa informācija',
	'PHPSHOP_PRODUCT_TYPE_FORM_PUBLISH' => 'Pubicēt?',
	'PHPSHOP_PRODUCT_TYPE_FORM_BROWSEPAGE' => 'Produktu tipu caurlūkošanas lapa',
	'PHPSHOP_PRODUCT_TYPE_FORM_FLYPAGE' => 'Produktu tipu Flypage',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_LIST_LBL' => 'Produktu tipu parametri',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_LBL' => 'Parametra informācija',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NOT_FOUND' => 'Produkta tips nav atrasts!',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NAME' => 'Parametra nosaukums',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_NAME_DESCRIPTION' => 'Šis nosaukums nevar būt kolonnas nosaukums, tam ir jābūt bez atstarpēm un unikāls.<BR>Piemēram: main_material',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_LABEL' => 'Parametra nosaukums',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_INTEGER' => 'Integer',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TEXT' => 'Text',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_SHORTTEXT' => 'Short Text',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_FLOAT' => 'Float',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_CHAR' => 'Char',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATETIME' => 'Date & Time',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_DATE' => 'Date',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_TIME' => 'Time',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_BREAK' => 'Break Line',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_TYPE_MULTIVALUE' => 'Multiple Values',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_VALUES' => 'Possible Values',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_MULTISELECT' => 'Rādīt iespējamās vērtības kā Multiply izvēlni?',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_VALUES_DESCRIPTION' => '<strong>Ja ir iespējamās vērtības ir uzstādītas, parametrs var būt tikai šo vērtību ietvaros. Piemēram, ja vērtības ir:</strong><BR><span class="sectionname">Steel;Wood;Plastic;...</span>',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DEFAULT' => 'Noklusētā vērtība',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_DEFAULT_HELP_TEXT' => 'Noklusētai vērtībai vērtībai jābūt šādā formātā:<ul><li>Date: YYYY-MM-DD</li><li>Time: HH:MM:SS</li><li>Date & Time: YYYY-MM-DD HH:MM:SS</li></ul>',
	'PHPSHOP_PRODUCT_TYPE_PARAMETER_FORM_UNIT' => 'Vienība',
	'PHPSHOP_PRODUCT_CLONE' => 'Klonēt produktu',
	'PHPSHOP_HIDE_OUT_OF_STOCK' => 'Paslēpt produktus',
	'PHPSHOP_FEATURED_PRODUCTS_LIST_LBL' => 'Produkti ar atlaidēm',
	'PHPSHOP_FEATURED' => 'Iezīmētie',
	'PHPSHOP_SHOW_FEATURED_AND_DISCOUNTED' => 'Iezīmētie un ar atlaidēm',
	'PHPSHOP_SHOW_DISCOUNTED' => 'produkti ar atlaidēm',
	'PHPSHOP_FILTER' => 'Filtrēti',
	'PHPSHOP_PRODUCT_FORM_DISCOUNTED_PRICE' => 'Atlaides cena',
	'PHPSHOP_PRODUCT_FORM_DISCOUNTED_PRICE_TIP' => 'Šeit Jūs varat noteikt atlaides līmeni produktam.<br/>
Veikals izveidos jaunu atlaidi, priekš preces.',
	'PHPSHOP_PRODUCT_LIST_QUANTITY_START' => 'Daudzums Start',
	'PHPSHOP_PRODUCT_LIST_QUANTITY_END' => 'Daudzums End',
	'VM_PRODUCTS_MOVE_LBL' => 'Move products from one category to another',
	'VM_PRODUCTS_MOVE_LIST' => 'You have chosen to move the following %s products',
	'VM_PRODUCTS_MOVE_TO_CATEGORY' => 'Move to the following category',
	'VM_PRODUCT_LIST_REORDER_TIP' => 'Select a product category to reorder products in a category',
	'VM_REVIEW_FORM_LBL' => 'Add Review',
	'PHPSHOP_REVIEW_EDIT' => 'Add/Edit a Review',
	'SEL_CATEGORY' => 'Select a category',
	'VM_PRODUCT_FORM_MIN_ORDER' => 'Minimum Purchase Quantity',
	'VM_PRODUCT_FORM_MAX_ORDER' => 'Maximum Purchase Quantity',
	'VM_DISPLAY_TABLE_HEADER' => 'Display Table Header',
	'VM_DISPLAY_LINK_TO_CHILD' => 'Link to child product from list',
	'VM_DISPLAY_INCLUDE_PRODUCT_TYPE' => 'Include Product Type With Child',
	'VM_DISPLAY_USE_LIST_BOX' => 'Use List box for child products',
	'VM_DISPLAY_LIST_STYLE' => 'List Style',
	'VM_DISPLAY_USE_PARENT_LABEL' => 'Use Parent Settings:',
	'VM_DISPLAY_LIST_TYPE' => 'List:',
	'VM_DISPLAY_QUANTITY_LABEL' => 'Quantity:',
	'VM_DISPLAY_QUANTITY_DROPDOWN_LABEL' => 'Drop Down Box Values',
	'VM_DISPLAY_CHILD_DESCRIPTION' => 'Display Child Description',
	'VM_DISPLAY_DESC_WIDTH' => 'Child Description Width',
	'VM_DISPLAY_ATTRIB_WIDTH' => 'Child Attribute Width',
	'VM_DISPLAY_CHILD_SUFFIX' => 'Child Class Suffix',
	'VM_INCLUDED_PRODUCT_ID' => 'Product IDs to include',
	'VM_EXTRA_PRODUCT_ID' => 'Extra IDs',
	'PHPSHOP_DISPLAY_RADIOBOX' => 'Use Radio Box',
	'PHPSHOP_PRODUCT_FORM_ITEM_DISPLAY_LBL' => 'Display Options',
	'PHPSHOP_DISPLAY_USE_PARENT' => 'Override Child products Display Values and use parents',
	'PHPSHOP_DISPLAY_NORMAL' => 'Standard Quantity Box',
	'PHPSHOP_DISPLAY_HIDE' => 'Hide Quantity Box',
	'PHPSHOP_DISPLAY_DROPDOWN' => 'Use Dropdown Box',
	'PHPSHOP_DISPLAY_CHECKBOX' => 'Use Check Box',
	'PHPSHOP_DISPLAY_ONE' => 'One Add to Cart Button',
	'PHPSHOP_DISPLAY_MANY' => 'Add to Cart Button for each Child',
	'PHPSHOP_DISPLAY_START' => 'Start Value',
	'PHPSHOP_DISPLAY_END' => 'End Value',
	'PHPSHOP_DISPLAY_STEP' => 'Step Value',
	'PRODUCT_WAITING_LIST_TAB' => 'Waiting List',
	'PRODUCT_WAITING_LIST_USERLIST' => 'Users waiting to be notified when this product is back in stock',
	'PRODUCT_WAITING_LIST_NOTIFYUSERS' => 'Notify these users now (when you have updated the number of products stock)',
	'PRODUCT_WAITING_LIST_NOTIFIED' => 'notified',
	'VM_PRODUCT_FORM_AVAILABILITY_SELECT_IMAGE' => 'Select Image',
	'VM_PRODUCT_RELATED_SEARCH' => 'Search for Products or Categories here:',
	'VM_FILES_LIST_ROLE' => 'Role',
	'VM_FILES_LIST_UP' => 'Up',
	'VM_FILES_LIST_GO_UP' => 'Go Up',
	'VM_CATEGORY_FORM_PRODUCTS_PER_ROW' => 'Show x products per row',
	'VM_CATEGORY_FORM_BROWSE_PAGE' => 'Category Browse Page',
	'VM_PRODUCT_CLONE_OPTIONS_TAB' => 'Clone Product Otions',
	'VM_PRODUCT_CLONE_OPTIONS_LBL' => 'Also clone these Child Items',
	'VM_PRODUCT_LIST_MEDIA' => 'Media',
	'VM_REVIEW_LIST_NAMEDATE' => 'Name/Date',
	'VM_PRODUCT_SELECT_ONE_OR_MORE' => 'Select one or more Products',
	'VM_PRODUCT_SEARCHING' => 'Searching...',
	'PHPSHOP_PRODUCT_FORM_ATTRIBUTE_LIST_EXAMPLES' => '<h4>Examples for the Attribute List Format:</h4>
        <pre>Size,XL[+1.99],M,S[-2.99];Colour,Red,Green,Yellow,ExpensiveColor[=24.00];AndSoOn,..,..</pre>
        <h4>Inline price adjustments for using the Advanced Attributes modification:</h4>
        <pre>
        + == Add this amount to the configured price.<br />
        - == Subtract this amount from the configured price.<br />
        = == Set the product\'s price to this amount.
      </pre>',
	'VM_FILES_FORM_PRODUCT_IMAGE' => 'Product Image (full and thumb)',
	'VM_FILES_FORM_DOWNLOADABLE' => 'Downloadable Product File (to be sold!)',
	'VM_FILES_FORM_RESIZE_IMAGE' => 'Resize Full Image File?'
); $VM_LANG->initModule( 'product', $langvars );
?>