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

// Require the base controller
require_once JPATH_COMPONENT.DS.'controller.php';

// Initialize the controller
$controller = new KarlinspicaController();
$controller->execute( null );

// Redirect if set by the controller
$controller->redirect();
?>