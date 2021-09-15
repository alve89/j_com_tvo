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
class TvoModelEinzelteam extends JModelItem {
	/**
	 * @var array team
	 */
	protected $team;


	public function getTeam() {

		$jinput = JFactory::getApplication()->input;
		$id     = $jinput->get('id', 1, 'INT');


		$db = JFactory::getDbo();
		$prefix = $db->getPrefix();
		$availableTables = $db->setQuery('SHOW TABLES')->loadColumn();
		$tablesNotFound = false;

		if(!array_search($prefix.'tvo_teams', $availableTables) ) {
			$tablesNotFound = true;
		}

		// Alle notwendigen Tabellen wurden gefunden
		if( !$tablesNotFound ) {
			// Suche gewünschtes Team in Datenbank
			$db = JFactory::getDbo();
			$query = $db->getQuery(true);
			$query->select('*');
			$query->from($db->quoteName('#__tvo_teams'));
			$query->where($db->quoteName('id') . ' = ' . $db->quote($id));
			$db->setQuery((string) $query);
		  $db->query();

			// Prüfe, ob gewünschtes Team gefunden wurde
			if( $db->getNumRows() > 0 ) {
		    // Lade Daten von gewähltem Team
				$db = JFactory::getDbo();
				$query = $db->getQuery(true);
				$query->select('*');
				$query->from($db->quoteName('#__tvo_teams'));
				$query->where($db->quoteName('id') . ' = ' . $db->quote($id));
				$db->setQuery($query);
				$this->team = $db->loadObject();
				return $this->team;
		  }
		  else {
		    // Es wurden keine Spiele gefunden
		    $application->enqueueMessage(JText::_('COM_TVO_VIEW_EINZELTEAM_TEAM_NOT_FOUND'), 'error');
		  }
			return NULL;
		}
		return NULL;
	}
}
