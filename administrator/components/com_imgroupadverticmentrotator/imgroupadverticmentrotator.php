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

/*
 * Define constants for all pages
 */
define( 'COM_IMGROUPADVERTICMENTROTATOR_DIR', 'images'.DS.'imgroupadverticmentrotator'.DS );
define( 'COM_IMGROUPADVERTICMENTROTATOR_BASE', JPATH_ROOT.DS.COM_IMGROUPADVERTICMENTROTATOR_DIR );
define( 'COM_IMGROUPADVERTICMENTROTATOR_BASEURL', JURI::root().str_replace( DS, '/', COM_IMGROUPADVERTICMENTROTATOR_DIR ));

// Require the base controller
require_once JPATH_COMPONENT.DS.'controller.php';

// Require the base controller
require_once JPATH_COMPONENT.DS.'helpers'.DS.'helper.php';

// Initialize the controller
$controller = new ImgroupadverticmentrotatorController( );

// Perform the Request task
$controller->execute( JRequest::getCmd('task'));
$controller->redirect();
?>