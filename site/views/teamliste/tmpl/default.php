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

//echo $this->msg;

foreach($this->msgs as $msg) {
  echo $msg->title . '<br />';
}


?>
