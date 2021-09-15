<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_tvo
 *
 * @copyright   Copyright (C) 2005 - 2018 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access to this file
defined('_JEXEC') or die('Restricted access');
require_once('./components'. DS . JFactory::getApplication()->input->get('option') . DS . 'helper.php');
?>

<h3><?=$this->team->teamName; // retrieve data from view (and earlier from model), the team is selected in menu item?></h3>


<?php


ComTvoHelper::varDump($this->team);

?>
