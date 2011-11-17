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

jimport('joomla.application.component.model');

/**
 * Atsauksmes Component Atsauksmes Model
 *
 * @author      notwebdesign
 * @package		Joomla
 * @subpackage	Atsauksmes
 * @since 1.5
 */
class AtsauksmesModelAtsauksmes extends JModel {
    /**
	 * Constructor
	 */
	function __construct() {
		parent::__construct();
    }
}
?>