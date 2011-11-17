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

/*
 * Define constants for all pages
 */
define( 'COM_KARLINSPICA_DIR', 'images'.DS.'karlinspica'.DS );
define( 'COM_KARLINSPICA_BASE', JPATH_ROOT.DS.COM_KARLINSPICA_DIR );
define( 'COM_KARLINSPICA_BASEURL', JURI::root().str_replace( DS, '/', COM_KARLINSPICA_DIR ));

// Require the base controller
require_once JPATH_COMPONENT.DS.'controller.php';

// Require the base controller
require_once JPATH_COMPONENT.DS.'helpers'.DS.'helper.php';

// Initialize the controller
$controller = new KarlinspicaController( );

// Perform the Request task
$controller->execute( JRequest::getCmd('task'));
$controller->redirect();
?>