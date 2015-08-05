<?php
	// Register handler calls for Scheduler
if (\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::isLoaded('scheduler')) {
	$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks']['tx_externalimport_autosync_scheduler_Task'] = array(
		'extension'			=> $_EXTKEY,
		'title'				=> 'LLL:EXT:' . $_EXTKEY . '/locallang.xml:scheduler.title',
		'description'		=> 'LLL:EXT:' . $_EXTKEY . '/locallang.xml:scheduler.description',
		'additionalFields'	=> 'tx_externalimport_autosync_scheduler_AdditionalFieldProvider'
	);
}
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerExtDirectComponent(
	'TYPO3.ExternalImport.ExtDirect',
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY, 'Classes/ExtDirect/Server.php:Tx_ExternalImport_ExtDirect_Server'),
	'user_ExternalImportExternalImport',
	'user,group'
);
?>