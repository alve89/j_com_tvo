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
require_once('./components'. '/' . JFactory::getApplication()->input->get('option') . '/' . 'helper.php');

/**
 * HelloWorld Controller
 *
 * @package     Joomla.Administrator
 * @subpackage  com_helloworld
 * @since       0.0.9
 */
class TvoControllerTvoSingleTeam extends JControllerForm {

  public function apply() {
    JSession::checkToken() or die('Invalid token');

    die('apply');

  }

  public function cancel() {
    $this->setRedirect(JRoute::_('index.php?option=com_tvo', false));
  }

  public function remove() {
    JSession::checkToken() or die('Invalid token');
    echo 'ichLöscheInhalte';
    $jinput = JFactory::getApplication()->input;
    $jform = $jinput->get('jform', array(), 'ARRAY');

    echo '<pre>';
    var_dump($jform);
    echo '</pre>';

    // $application = JFactory::getApplication();
    // $application->enqueueMessage(JText::_('Datensatz wurde gelöscht'), 'message');
    // $this->setRedirect(JRoute::_('index.php?option=com_tvo', false));
  }

  public function validate($formField, $regex) {
    return preg_match($regex, $formField);
	}

	public function save() {
    JSession::checkToken() or die('Invalid token');

    $application = JFactory::getApplication();
    $jinput = JFactory::getApplication()->input;
    $jform = $jinput->get('jform', array(), 'ARRAY');

    // Lade nur die Formularfelder aus dem Request
    //$jform = JFactory::getApplication()->input->get('jform', array(), 'ARRAY');

    $validationCheck = true;

    // Validiere alle Formularfelder
    foreach($jform as $fieldName => $fieldValue) {

      switch($fieldName) {
        case 'id':
        case 'teamGamesId':
        case 'teamTableId':
          $regex = "/^[0-9]+$/";
          break;
        case 'teamName':
        case 'title':
          $regex = "/^[a-zA-Z0-9][a-zA-Z0-9 -]+[a-zA-Z0-9]$/";
          break;
        default:
          $regex = "/^[0-9]+$/";
      }



      if( $this->validate($fieldValue, $regex) === 1 ) {
        // Validation was successful => store new value
        $validationCheck = ($validationCheck) ? true : false; // Keep the state if it is already false (=> at least one validation was faulty!)
// Hier
// Speichern
// Durchführen

      }
      else {
        $validationCheck = false;
        $faultyFieldName = $fieldName;
        break;
      }
    }

    if($validationCheck) {
      $application->enqueueMessage(JText::_('Datensatz wurde NOCH NICHT gespeichert'), 'warning');
      if($jinput->get('task') == 'apply') {
        $this->setRedirect(JRoute::_('index.php?option='.$jinput->get('option').'&view=tvosingleteam&layout='.$jinput->get('layout').'&id='.$jinput->get('id'), false));
      }
      else {
        $this->setRedirect(JRoute::_('index.php?option=com_tvo', false));
      }
    }
    else {
      $application->enqueueMessage(JText::_('Datensatz wurde nicht gespeichert werden, weil zumindest das Feld <code>' . $faultyFieldName .'</code> ungültige Inhalte enthielt.'), 'error');
      $this->setRedirect(JRoute::_('index.php?option='.$jinput->get('option').'&view=tvosingleteam&layout='.$jinput->get('layout').'&id='.$jinput->get('id'), false));
    }

	}
}
