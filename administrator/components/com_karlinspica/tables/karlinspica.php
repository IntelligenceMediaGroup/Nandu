<?php
/**
 * Joomla! 1.5 component Karlins Pica
 *
 * @version $Id: karlinspica.php 2011-11-08 12:13:43 svn $
 * @author Intelligence Media Group
 * @package Joomla
 * @subpackage Karlins Pica
 * @license GNU/GPL
 *
 * Karlins pica preču pārvaldnieks
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
* @subpackage		Karlins Pica
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
		parent::__construct('#__karlinspica', 'id', $db);
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