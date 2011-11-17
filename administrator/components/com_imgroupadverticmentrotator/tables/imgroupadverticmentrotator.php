<?php
/**
 * Joomla! 1.5 component IM Group Adverticment rotator
 *
 * @version $Id: imgroupadverticmentrotator.php 2011-11-02 10:19:02 svn $
 * @author Davis Stegmanis
 * @package Joomla
 * @subpackage IM Group Adverticment rotator
 * @license GNU/GPL
 *
 * Intelligence Media Group adverticment rotator
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
* @subpackage		IM Group Adverticment rotator
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
		parent::__construct('#__imgroupadverticmentrotator', 'id', $db);
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