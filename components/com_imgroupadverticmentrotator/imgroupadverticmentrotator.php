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

// Require the base controller
require_once JPATH_COMPONENT.DS.'controller.php';

// Initialize the controller
$controller = new ImgroupadverticmentrotatorController();
$controller->execute( null );

// Redirect if set by the controller
$controller->redirect();
?>