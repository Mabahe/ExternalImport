<?php

/*********************************************************************
* Extension configuration file for ext "external_import".
*
* Generated by ext 11-06-2015 10:55 UTC
*
* https://github.com/t3elmar/Ext
*********************************************************************/

$EM_CONF[$_EXTKEY] = array (
  'title' => 'External Data Import',
  'description' => 'Tool for importing data from external sources into the TYPO3 database, using an extended TCA syntax. Provides a BE module, a Scheduler task and an API.',
  'category' => 'module',
  'author' => 'Francois Suter (Cobweb)',
  'author_email' => 'typo3@cobweb.ch',
  'state' => 'stable',
  'uploadfolder' => 0,
  'createDirs' => '',
  'clearCacheOnLoad' => 0,
  'author_company' => '',
  'version' => '2.5.0',
  'constraints' =>
  array (
    'depends' =>
    array (
      'svconnector' => '2.0.0-0.0.0',
      'typo3' => '6.2.0-7.99.99',
    ),
    'conflicts' =>
    array (
    ),
    'suggests' =>
    array (
      'externalimport_tut' => '',
      'scheduler' => '',
    ),
  ),
  '_md5_values_when_last_written' => 'a:71:{s:9:"ChangeLog";s:4:"6a58";s:10:"README.txt";s:4:"3fcc";s:36:"class.tx_externalimport_importer.php";s:4:"f7ab";s:16:"ext_autoload.php";s:4:"9a33";s:21:"ext_conf_template.txt";s:4:"d019";s:12:"ext_icon.gif";s:4:"d913";s:17:"ext_localconf.php";s:4:"7e2b";s:14:"ext_tables.php";s:4:"11d0";s:13:"locallang.xml";s:4:"2f68";s:40:"Classes/Controller/ListingController.php";s:4:"7ae5";s:53:"Classes/Domain/Repository/ConfigurationRepository.php";s:4:"42ba";s:49:"Classes/Domain/Repository/SchedulerRepository.php";s:4:"b561";s:28:"Classes/ExtDirect/Server.php";s:4:"a523";s:46:"Classes/ViewHelpers/Be/ContainerViewHelper.php";s:4:"4d26";s:26:"Documentation/Includes.txt";s:4:"c83c";s:23:"Documentation/Index.rst";s:4:"6632";s:26:"Documentation/Settings.yml";s:4:"382f";s:25:"Documentation/Targets.rst";s:4:"cc7b";s:38:"Documentation/Administration/Index.rst";s:4:"1106";s:46:"Documentation/Administration/Columns/Index.rst";s:4:"aec0";s:49:"Documentation/Administration/GeneralTca/Index.rst";s:4:"d121";s:46:"Documentation/Administration/Mapping/Index.rst";s:4:"9b4f";s:50:"Documentation/Administration/MmRelations/Index.rst";s:4:"74cc";s:49:"Documentation/Administration/UserRights/Index.rst";s:4:"e2b0";s:33:"Documentation/AppendixA/Index.rst";s:4:"dcca";s:48:"Documentation/AppendixA/UpgradeFrom050/Index.rst";s:4:"ee69";s:46:"Documentation/AppendixA/UpgradeTo080/Index.rst";s:4:"f69f";s:50:"Documentation/AppendixA/UpgradeToTypo343/Index.rst";s:4:"8268";s:37:"Documentation/Configuration/Index.rst";s:4:"82b2";s:33:"Documentation/Developer/Index.rst";s:4:"b07c";s:37:"Documentation/Developer/Api/Index.rst";s:4:"f161";s:48:"Documentation/Developer/CustomHandlers/Index.rst";s:4:"2ac8";s:39:"Documentation/Developer/Hooks/Index.rst";s:4:"5b59";s:47:"Documentation/Developer/UserFunctions/Index.rst";s:4:"d839";s:41:"Documentation/Images/AutomationDialog.png";s:4:"8f87";s:46:"Documentation/Images/ExternalImportProcess.png";s:4:"63c4";s:39:"Documentation/Images/FullAutomation.png";s:4:"8d58";s:45:"Documentation/Images/InformationInspector.png";s:4:"ac62";s:56:"Documentation/Images/NonSynchronizableTablesOverview.png";s:4:"27bb";s:53:"Documentation/Images/SynchronizableTablesOverview.png";s:4:"79ff";s:47:"Documentation/Images/SynchronizationResults.png";s:4:"cf40";s:36:"Documentation/Installation/Index.rst";s:4:"22ea";s:36:"Documentation/Introduction/Index.rst";s:4:"1fd3";s:37:"Documentation/KnownProblems/Index.rst";s:4:"758c";s:28:"Documentation/User/Index.rst";s:4:"75bc";s:42:"Documentation/User/BackendModule/Index.rst";s:4:"c1e6";s:34:"Documentation/User/Cache/Index.rst";s:4:"012c";s:38:"Documentation/User/Debugging/Index.rst";s:4:"0b7a";s:36:"Documentation/User/General/Index.rst";s:4:"17b7";s:40:"Documentation/User/MappingData/Index.rst";s:4:"aa33";s:37:"Documentation/User/Overview/Index.rst";s:4:"7e2e";s:44:"Documentation/User/Troubleshooting/Index.rst";s:4:"f382";s:37:"Documentation/User/Tutorial/Index.rst";s:4:"cb16";s:40:"Resources/Private/Language/locallang.xml";s:4:"7f25";s:37:"Resources/Private/Layouts/Module.html";s:4:"330d";s:47:"Resources/Private/Templates/Listing/NoSync.html";s:4:"8eaf";s:45:"Resources/Private/Templates/Listing/Sync.html";s:4:"4aa1";s:39:"Resources/Public/Icons/preview_data.gif";s:4:"526a";s:43:"Resources/Public/Icons/refresh_animated.gif";s:4:"e1d4";s:38:"Resources/Public/Images/moduleIcon.png";s:4:"de79";s:42:"Resources/Public/JavaScript/Application.js";s:4:"5808";s:46:"Resources/Public/StyleSheet/ExternalImport.css";s:4:"6f67";s:79:"autosync/class.tx_externalimport_autosync_scheduler_additionalfieldprovider.php";s:4:"03f5";s:60:"autosync/class.tx_externalimport_autosync_scheduler_task.php";s:4:"fc00";s:54:"interfaces/interface.tx_externalimport_datahandler.php";s:4:"9be0";s:15:"mod1/README.txt";s:4:"c753";s:18:"mod1/locallang.xml";s:4:"65bd";s:37:"mod1/locallang_csh_externalimport.xml";s:4:"2969";s:22:"mod1/locallang_mod.xml";s:4:"4c34";s:51:"samples/class.tx_externalimport_transformations.php";s:4:"adb6";s:47:"tests/class.tx_externalimport_importer_Test.php";s:4:"163c";}',
  'user' => 'francois',
  'comment' => 'Improved handling of MM relations; added hook for processing connector parameters.',
);

?>