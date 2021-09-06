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

/**
 * Tvo Model
 *
 * @since  0.0.1
 */
class TvoModelTvo extends JModelItem {
	/**
	 * @var string message
	 */
	protected $message;

	/**
	 * Get the message
   *
	 * @return  string  The message to be displayed to the user
	 */
	public function getMsg() {
		if (!isset($this->message)) {
			//$this->message = 'Hello World from model!';

			// Check if an option (set in /views/tvo/tmpl/default.xml => fields) was passed in the URL (e.g. ?option=2) or rather if this option was set in administrator => menu item => COM_HELLOWORLD_HELLOWORLD_FIELD_GREETING_LABEL
			$jinput = JFactory::getApplication()->input;
			$id     = $jinput->get('id', 1, 'INT');

			switch ($id) {
				case 2:
					$this->message = 'Good bye World!';
					break;
				default:
				case 1:
					$this->message = 'Hello World!';
					break;
			}
		}
		return $this->message;
	}


}
