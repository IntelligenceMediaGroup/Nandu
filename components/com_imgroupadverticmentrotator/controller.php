<?php
/**
 * Joomla! 1.5 component IM Group Adverticment rotator
 *
 * @version $Id: controller.php 2011-11-02 10:19:02 svn $
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

jimport('joomla.application.component.controller');

/**
 * IM Group Adverticment rotator Component Controller
 */
class ImgroupadverticmentrotatorController extends JController {
	function display() {
        // Make sure we have a default view
        if( !JRequest::getVar( 'view' )) {
		    JRequest::setVar('view', 'imgroupadverticmentrotator' );
        }
		parent::display();
	}
}
?>