<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_helloworld
 *
 * @copyright   Copyright (C) 2005 - 2018 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

/**
 * Form Rule class for the Joomla Framework.
 */
class JFormRuleTeamTitle extends JFormRule
{
	/**
	 * The regular expression.
	 *
	 * @access	protected
	 * @var		string
	 * @since	2.5
	 */
	protected $regex = '^[a-zA-Z0-9][a-zA-Z0-9 -]+[a-zA-Z0-9]$'; //^[a-zA-Z0-9 -]+$
                  //  |----------| Erstes Zeichen darf sein a-z, A-Z und 0-9
                  //             |------------| Zeichen zwischen erstem und letztem dürfen sein a-z, A-Z, 0-9, Leerzeichen und Minus
                  //                            |-----------| Letztes Zeichen darf sein a-z, A-Z und 0-9
}
