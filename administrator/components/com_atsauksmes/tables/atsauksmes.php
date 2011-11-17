<?php
/**
 * Joomla! 1.5 component Atsauksmes
 *
 * @version $Id: atsauksmes.php 2011-11-10 22:06:41 svn $
 * @author Intelligence Media Group
 * @package Joomla
 * @subpackage Atsauksmes
 * @license GNU/GPL
 *
 * Saņemtās atsauksmes par Karlin's Picēriju un produktiem.
 *
 * This component file was created using the Joomla Component Creator by Not Web Design
 * http://www.notwebdesign.com/joomla_component_creator/
 *
 */

// no direct access
defined('_JEXEC') or die('Restricted access');

// Include library dependencies
jimport('joomla.filter.input');

/**
* Table class
*
* @package          Joomla
* @subpackage		Atsauksmes
*/
class TableItem extends JTable {

	/**
	 * Primary Key
	 *
	 * @var int
	 */
	var $id = null;


    /**
	 * Constructor
	 *
	 * @param object Database connector object
	 * @since 1.0
	 */
	function __construct(& $db) {
		parent::__construct('#__atsauksmes', 'id', $db);
	}

	/**
	 * Overloaded check method to ensure data integrity
	 *
	 * @access public
	 * @return boolean True on success
	 */
	function check() {
		return true;
	}

}
?>