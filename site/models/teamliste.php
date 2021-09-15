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
 * HelloWorld Model
 *
 * @since  0.0.1
 */


class TvoModelTeamListe extends JModelList
{
	/**
	 * @var array messages
	 */
	protected $messages;


	 /**
		 * Get the message
		 *
		 * @param   integer  $id  Greeting
		 * @return  string        Fetched String from Table for relevant Id
		 */
		public function getMsgs() {
			if (!is_array($this->messages)) {
				$this->messages = array();
			}

			$db = JFactory::getDbo();
			$prefix = $db->getPrefix();
			$availableTables = $db->setQuery('SHOW TABLES')->loadColumn();
			$tablesNotFound = false;

			if(!array_search($prefix.'tvo_teams', $availableTables) ) {
			  $tablesNotFound = true;
			}
			if(!array_search($prefix.'tvo_games', $availableTables) ) {
			  $tablesNotFound = true;
			}

			if( !$tablesNotFound ) {
				$db = JFactory::getDbo();
				$query = $db->getQuery(true);

				$query->select('*');
				$query->from($db->quoteName('#__tvo_teams'));
				//$query->where($db->quoteName('profile_key') . ' LIKE ' . $db->quote('custom.%'));
				$query->order('id ASC');

				$db->setQuery($query);
				$this->messages = $db->loadObjectList();
				return $this->messages;
			}
			return NULL;
		}
	}
