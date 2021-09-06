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

JFormHelper::loadFieldClass('list');

/**
 * TvoTeams Form Field class for the HelloWorld component
 *
 * @since  0.0.1
 */
class JFormFieldTvoTeams extends JFormFieldList
{
	/**
	 * The field type.
	 *
	 * @var         string
	 */
	protected $type = 'TvoTeams';

	/**
	 * Method to get a list of options for a list input.
	 *
	 * @return  array  An array of JHtml options.
	 */
	protected function getOptions()
	{
		$db    = JFactory::getDBO();
		$query = $db->getQuery(true);
		$query->select('id,teamId,title,published');
		$query->from('#__tvo_teams');
		$db->setQuery((string) $query);
		$teams = $db->loadObjectList();
		$options  = array();

		if ($teams) {
			foreach ($teams as $team)
			{
				$options[] = JHtml::_('select.option', $team->teamId, $team->title, $team->published);
			}
		}

		$options = array_merge(parent::getOptions(), $options);

		return $options;
	}
}
