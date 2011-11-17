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

jimport( 'joomla.application.component.controller' );
require_once( JPATH_COMPONENT.DS.'helpers'.DS.'helper.php' );

/**
 * Karlins Pica Controller
 *
 * @package Joomla
 * @subpackage Karlins Pica
 */
class KarlinspicaController extends JController {
    /**
     * Constructor
     * @access private
     * @subpackage Karlins Pica
     */
    function __construct() {
        //Get View
        if(JRequest::getCmd('view') == '') {
            JRequest::setVar('view', 'default');
        }
        $this->item_type = 'Default';
        parent::__construct();
    }
}
?>