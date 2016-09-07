<?php


// no direct access
defined('_JEXEC') or die('Restricted access');

// include YOOmenu system
require_once(dirname(__FILE__).'/yoomenu.php');

// render YOOmenu
$yoomenu = &YOOMenu::getInstance();
$yoomenu->setParams($params);
$yoomenu->render($params, 'YOOMenuDefaultDecorator');

?>