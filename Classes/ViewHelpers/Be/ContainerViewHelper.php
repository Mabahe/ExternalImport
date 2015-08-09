<?php
/***************************************************************
 *  Copyright notice
 *
 *  (c) 2012 Francois Suter (typo3@cobweb.ch)
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *  A copy is found in the textfile GPL.txt and important notices to the license
 *  from the author is found in LICENSE.txt distributed with these scripts.
 *
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * This class extends the base BE container View Helper to add specific initializations
 *
 * @author		Francois Suter (Cobweb) <typo3@cobweb.ch>
 * @package		TYPO3
 * @subpackage	tx_externalimport
 *
 * $Id$
 */
class Tx_ExternalImport_ViewHelpers_Be_ContainerViewHelper extends \TYPO3\CMS\Fluid\ViewHelpers\Be\ContainerViewHelper {

	/**
	 * Render start page with template.php and pageTitle
	 *
	 * @param string $pageTitle title tag of the module. Not required by default, as BE modules are shown in a frame
	 * @param bool $enableClickMenu If TRUE, loads clickmenu.js required by BE context menus. Defaults to TRUE
	 * @param bool $loadExtJs specifies whether to load ExtJS library. Defaults to FALSE
	 * @param bool $loadExtJsTheme whether to load ExtJS "grey" theme. Defaults to FALSE
	 * @param bool $enableExtJsDebug if TRUE, debug version of ExtJS is loaded. Use this for development only
	 * @param bool $loadJQuery whether to load jQuery library. Defaults to FALSE
	 * @param array $includeCssFiles List of custom CSS file to be loaded
	 * @param array $includeJsFiles List of custom JavaScript file to be loaded
	 * @param array $addJsInlineLabels Custom labels to add to JavaScript inline labels
	 * @param bool $includeCsh flag for including CSH
	 * @param array $includeRequireJsModules List of RequireJS modules to be loaded
	 * @param string $globalWriteAccess Whether uses has full access ("all"), "partial" access or none (to sync tables)
	 * @param string $view Name of the current view ("sync" or "nosync")
	 * @return string
	 * @see template
	 * @see \TYPO3\CMS\Core\Page\PageRenderer
	 */
	public function render($pageTitle = '', $enableClickMenu = TRUE, $loadExtJs = FALSE, $loadExtJsTheme = TRUE, $enableExtJsDebug = FALSE, $loadJQuery = FALSE, $includeCssFiles = NULL, $includeJsFiles = NULL, $addJsInlineLabels = NULL, $includeCsh = TRUE, $includeRequireJsModules = NULL, $globalWriteAccess = 'none', $view = 'sync') {
		$extensionConfiguration = unserialize($GLOBALS['TYPO3_CONF_VARS']['EXT']['extConf']['external_import']);

		$doc = $this->getDocInstance();
		$pageRenderer = $doc->getPageRenderer();
		$isTypo3Version62OrMore = version_compare(TYPO3_branch, '6.2', '>=');

		// Load ExtDirect
		$pageRenderer->addExtDirectCode(array('TYPO3.ExternalImport'));
		// Load the FitToParent ExtJS plugin
		if ($isTypo3Version62OrMore) {
			$uxPath = $doc->backPath . '../typo3/sysext/backend/Resources/Public/JavaScript/extjs/ux/';
		} else {
			$uxPath = $doc->backPath . '../t3lib/js/extjs/ux/';
		}
		$pageRenderer->addJsFile($uxPath . 'Ext.ux.FitToParent.js');
		// Pass some settings to the JavaScript application
		// First calculate the time limit (which is multiplied by 1000, because JS uses milliseconds)
		// Defaults to 30 seconds
		$timeLimitConfiguration = intval($extensionConfiguration['timelimit']);
		// If the time limit is 0, duration is supposed to be unlimited. Set 1 day as arbitrary value.
		if ($timeLimitConfiguration === 0) {
			$timeLimit = 86400 * 1000;
		} else {
			$timeLimit = ($timeLimitConfiguration > 0) ? $timeLimitConfiguration * 1000 : 30000;
		}
		$pageRenderer->addInlineSettingArray(
			'external_import',
			array(
				'timelimit' => $timeLimit,
				'hasScheduler' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::isLoaded('scheduler', FALSE),
				'globalWriteAccess' => $globalWriteAccess,
				'dateFormat' => $GLOBALS['TYPO3_CONF_VARS']['SYS']['ddmmyy'],
				'timeFormat' => $GLOBALS['TYPO3_CONF_VARS']['SYS']['hhmm'],
				'view' => $view
			)
		);
		// Load JS-powered flash messages library
		if ($isTypo3Version62OrMore) {
			$notificationLibraryPath = \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extRelPath('backend') . 'Resources/Public/JavaScript/notifications.js';
		} else {
			$notificationLibraryPath = $doc->backPath . '../t3lib/js/extjs/notifications.js';
		}
		$pageRenderer->addJsFile($notificationLibraryPath, 'text/javascript', FALSE);
			// Load the specific language file
		$pageRenderer->addInlineLanguageLabelFile('EXT:external_import/Resources/Private/Language/locallang.xml');
		$pageRenderer->addInlineLanguageLabelFile('EXT:lang/locallang_common.xml');

		$output = parent::render(
			$pageTitle,
			$enableClickMenu,
			$loadExtJs,
			$loadExtJsTheme,
			$enableExtJsDebug,
			$loadJQuery,
			$includeCssFiles,
			$includeJsFiles,
			$addJsInlineLabels,
			$includeCsh,
			$includeRequireJsModules
		);
		return $output;
	}
}

?>