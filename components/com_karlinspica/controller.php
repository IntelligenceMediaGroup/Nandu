<?php
/**
 * Joomla! 1.5 component Karlins Pica
 *
 * @version $Id: controller.php 2011-11-08 12:13:43 svn $
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

jimport('joomla.application.component.controller');

/**
 * Karlins Pica Component Controller
 */
class KarlinspicaController extends JController {
	function display() {
        // Make sure we have a default view
        if( !JRequest::getVar( 'view' )) {
		    JRequest::setVar('view', 'karlinspica' );
        }
		parent::display();
	}
}
?>