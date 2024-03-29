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
require_once('./components'. '/' . JFactory::getApplication()->input->get('option') . '/' . 'helper.php');




/**
 * HelloWorldList Model
 *
 * @since  0.0.1
 */
class TvoModelTvoSingleTeam extends JModelList
{
	/**
	 * Method to get a table object, load it if necessary.
	 *
	 * @param   string  $type    The table name. Optional.
	 * @param   string  $prefix  The class prefix. Optional.
	 * @param   array   $config  Configuration array for model. Optional.
	 *
	 * @return  JTable  A JTable object
	 *
	 * @since   1.6
	 */
	public function getTable($type = 'TvoSingleTeam', $prefix = 'TvoTable', $config = array())
	{
		return JTable::getInstance($type, $prefix, $config);
	}

	/**
	 * Method to get the record form.
	 *
	 * @param   array    $data      Data for the form.
	 * @param   boolean  $loadData  True if the form is to load its own data (default case), false if not.
	 *
	 * @return  mixed    A JForm object on success, false on failure
	 *
	 * @since   1.6
	 */
	public function getForm($data = array(), $loadData = true)
	{
		// Get the form.
		$form = $this->loadForm(
			'com_tvo.tvosingleteam',
			'tvosingleteam',
			array(
				'control' => 'jform',
				'load_data' => $loadData
			)
		);

		if (empty($form))
		{
			return false;
		}

		return $form;
	}

	/**
	 * Method to get the data that should be injected in the form.
	 *
	 * @return  mixed  The data for the form.
	 *
	 * @since   1.6
	 */
	protected function loadFormData()
	{
		// Check the session for previously entered form data.
		$data = JFactory::getApplication()->getUserState(
			'com_tvo.edit.tvosingleteam.data',
			array()
		);

		if (empty($data))
		{
			$data = $this->getItem();
		}

		return $data;
	}

	public function getItem() {

		$jinput = JFactory::getApplication()->input;
		$id     = $jinput->get('id', 0, 'INT');

		// Initialize variables.
		$db    = JFactory::getDbo();
		$query = $db->getQuery(true);

		// Create the base select statement.
		$query->select('*')
          ->from($db->quoteName('#__tvo_teams'))
					->where($db->quoteName('id') . '='. $db->quote($id));
		$db->setQuery( (string) $query);
		$item = $db->loadObject();

		return $item; // returns object or NULL

	}


	public function validate() {

		echo 'ichValidiereInhalte<br />';
    mail('stefan@die-herzogs.com', 'debug', 'test aus model:validate()');
		//return false;
	}


}
