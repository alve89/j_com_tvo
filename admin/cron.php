<?php
define('_JEXEC', 1);
define('JPATH_BASE', '../../../');
require_once JPATH_BASE . 'includes/defines.php';
require_once JPATH_BASE . 'includes/framework.php';
require_once 'helper.php';


// Check if all necessary tables exist in database
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
if(!array_search($prefix.'tvo_tables', $availableTables) ) {
  $tablesNotFound = true;
}

// Load all relevant (= published) teams from database
if( !$tablesNotFound ) {
  $db    = JFactory::getDBO();
  $query = $db->getQuery(true);
  $query->select('*');
  $query->from('#__tvo_teams');
  $query->where('published = 1');
  $db->setQuery((string) $query);
  $alleTeams = $db->loadObjectList();
}
else {
  die('ERROR: TABLES NOT FOUND');
}



/*
 *
 *
 * UPDATE #__tvo_games
 *
 *
 */

echo '<p>Games Data</p>';
foreach($alleTeams as $team) {
  $updateNulls = true;

  // Retrieve current data from BHV server
  $team->gamesData = ComTvoHelper::getCurrentGamesData($team->teamGamesId);

  // Define new object to be stored in the database
  $object = new stdClass;
  $object->teamGamesId = $team->teamGamesId;
  $object->gamesData = $team->gamesData;
  $object->lastUpdated = date('Y-m-d H:i:s', time());

  // Check if team exists in tvo_games table
  $db    = JFactory::getDBO();
  $query = $db->getQuery(true);
  $query->select($db->quoteName('teamGamesId'));
  $query->from($db->quoteName('#__tvo_games'));
  $query->where($db->quoteName('teamGamesId') . '=' . $db->quote($team->teamGamesId) );
  $db->setQuery((string) $query);
  $db->query();

  // Check if team already exists as record in the database. If yes => update, if no => insert
  if( $db->getNumRows() > 0 ) {
    $result = JFactory::getDbo()->updateObject('#__tvo_games', $object, 'teamGamesId', $updateNulls);
    print_r($team->teamGamesId.': UPDATE<br />');
  }
  else {
    $result = JFactory::getDbo()->insertObject('#__tvo_games', $object);
    print_r($team->teamGamesId.': INSERT<br />');
  }

}

/*
 *
 *
 * UPDATE #__tvo_tables
 *
 *
 */
echo '<p>Tables Data</p>';
foreach($alleTeams as $team) {
   // Define new object to be stored in the database
   $team->tablesData = ComTvoHelper::getCurrentTableData($team->teamTableId);
   $object = new stdClass;
   $object->teamTableId = $team->teamTableId;
   $object->tablesData = $team->tablesData;
   $object->lastUpdated = date('Y-m-d H:i:s', time());

   // Check if team exists in tvo_games table
   $db    = JFactory::getDBO();
   $query = $db->getQuery(true);
   $query->select($db->quoteName('teamTableId'));
   $query->from($db->quoteName('#__tvo_tables'));
   $query->where($db->quoteName('teamTableId') . '=' . $db->quote($team->teamTableId) );
   $db->setQuery((string) $query);
   $db->query();

   // Check if team already exists as record in the database. If yes => update, if no => insert
   if( $db->getNumRows() > 0 ) {
     $result = JFactory::getDbo()->updateObject('#__tvo_tables', $object, 'teamTableId', $updateNulls);
     print_r($team->teamTableId.': UPDATE<br />');
   }
   else {
     $result = JFactory::getDbo()->insertObject('#__tvo_tables', $object);
     print_r($team->teamTableId.': INSERT<br />');
   }


}
