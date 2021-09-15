<?php
// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die('Restricted access');

JFormHelper::loadFieldClass('list');




// ######################################
// ############## DROPDOWN ############

// // Liefert ein Dropdown-Feld zur Auswahl eines EINZELNEN Teams
// class JFormFieldListOfAllTeams extends JFormFieldList {
//
// 	protected $type = 'listOfAllTeams';
//
// 	public function getOptions() {
//     $db    = JFactory::getDBO();
//     $query = $db->getQuery(true);
//     $query->select('id, title');
//     $query->from('#__tvo_teams');
//     $db->setQuery((string) $query);
//     $teams = $db->loadObjectList();
//     $options  = array();
//
//     foreach ($teams as $team) {
//       $options[] = JHtml::_('select.option', $team->id, $team->title);
//     }
//
//     $options = array_merge(parent::getOptions(), $options);
//     return $options;
// 	}
// }













// jimport('joomla.form.helper');
// JFormHelper::loadFieldClass('Radio');
//
// class JFormFieldListOfAllTeams extends JFormFieldRadio {
//
//   public function varDump($var)
//   {
//     echo '<pre>';
//     var_dump($var);
//     echo '</pre>';
//     return;
//   }
//
// 	//The field class must know its own type through the variable $type.
// 	protected $type = 'listOfAllTeams';
//
// 	public function getLabel() {
// 		// code that returns HTML that will be shown as the label
// 		return 'Teams';
// 	}
//
//
//   public function getInput() {
//   	// code that returns HTML that will be shown as the form field
//     $db    = JFactory::getDBO();
//     $query = $db->getQuery(true);
//     $query->select('id, title');
//     $query->from('#__tvo_teams');
//     $db->setQuery((string) $query);
//     $teams = $db->loadObjectList();
//     $options  = array();
//
//     if ($teams) {
//       foreach ($teams as $team) {
//         $options[] = JHtml::_('select.option', $team->id, $team->title);
//       }
//     }
//
//     $options = array_merge(parent::getOptions(), $options);
//
//
//     return '<fieldset id="team1" class="btn-group btn-group-yesno radio">
//         			<input type="radio" id="team1_show0" name="teamsList[show]" value="1">
//               <label for="team1_show0" class="btn active btn-success">Anzeigen</label>
//
//         			<input type="radio" id="team1_show1" name="teamsList[show]" value="0">
//               <label for="team1_show1" class="btn">Verbergen</label>
//             </fieldset>';
//
//   }
// }






// //######################################
// //############## CHECKBOXES ############
//
//
// jimport('joomla.form.helper');
// JFormHelper::loadFieldClass('Checkboxes');
//
//
//
//   class JFormFieldListOfAllTeams extends JFormFieldCheckboxes {
//   	public function getOptions() {
//       $db    = JFactory::getDBO();
//       $query = $db->getQuery(true);
//       $query->select('id, title');
//       $query->from('#__tvo_teams');
//       $db->setQuery((string) $query);
//       $teams = $db->loadObjectList();
//       $options  = array();
//
//       foreach ($teams as $team) {
//         $options[] = JHtml::_('select.option', $team->id, $team->title);
//       }
//
//       $options = array_merge(parent::getOptions(), $options);
//       return $options;
//   	}
//   }





//##############################################
//############## MULTI CHOICE (TAGS) ############

jimport('joomla.form.helper');
JFormHelper::loadFieldClass('Tag');

// $getInput = JFormHelper::loadFieldType('Tag', false);
// $taginput = $tags->getInput();


  class JFormFieldListOfAllTeams extends JFormFieldTag {

//    protected $type = 'ListOfAllTeams'; // this line causes unknown error while loading page

  	public function getOptions() {
      $db    = JFactory::getDBO();
      $query = $db->getQuery(true);
      $query->select('id, title');
      $query->from('#__tvo_teams');
      $query->where('published = 1');
      $db->setQuery((string) $query);
      $teams = $db->loadObjectList();
      $options  = array();

      foreach ($teams as $team) {
        $options[] = JHtml::_('select.option', $team->id, $team->title);
      }


      return $options;
  	}
 }
