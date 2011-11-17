<?php
/**
 * Joomla! 1.5 component Atsauksmes
 *
 * @version $Id: controller.php 2011-11-10 22:06:41 svn $
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

jimport('joomla.application.component.controller');

/**
 * Atsauksmes Component Controller
 */
class AtsauksmesController extends JController {
	function display() {
        // Make sure we have a default view
        if( !JRequest::getVar( 'view' )) {
		    JRequest::setVar('view', 'atsauksmes' );
        }
		parent::display();
	}
}
?>