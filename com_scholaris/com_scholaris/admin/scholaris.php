<?php
/**
 * @package   	Scholaris
 * @copyright 	Copyright 2012 http://www.loginradius.com - All rights reserved.
 * @license   	GNU/GPL 2 or later
 */
defined ('_JEXEC') or die ('Direct Access to this location is not allowed.');
jimport ('joomla.application.component.controller');

require_once(JPATH_COMPONENT.DS.'controller.php');

// Create the controller
$controller = new ScholarisController();

// Perform the Request task
$controller->execute(JRequest::getVar('task', null, 'default', 'cmd'));

// Redirect if set by the controller
$controller->redirect();
