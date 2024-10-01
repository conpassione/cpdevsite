<?php
declare(strict_types=1);

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
// use TYPO3\CMS\Core\Imaging\IconProvider\BitmapIconProvider;
// use TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider;

defined('TYPO3') or die();

// CK-Editor Konfiguration laden
if (empty($GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['cpdevsite'])) {
    $GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['cpdevsite'] = 'EXT:cpdevsite/Configuration/RTE/RTEsettings.yaml';
}

// CK-Editor Konfiguration laden mit Code-Auszeichnung
if (empty($GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['cpdevsite' . 'Code'])) {
    $GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['cpdevsite' . 'Code'] = 'EXT:cpdevsite/Configuration/RTE/RTEsettingsCode.yaml';
}


// Add custom translations overriding default labels
// $GLOBALS['TYPO3_CONF_VARS']['SYS']['locallangXMLOverride']['EXT:frontend/Resources/Private/Language/locallang_tca.xlf'][] = 'EXT:cpdevsite/Resources/Private/Language/custom.xlf';
// $GLOBALS['TYPO3_CONF_VARS']['SYS']['locallangXMLOverride']['de']['EXT:frontend/Resources/Private/Language/locallang_tca.xlf'][] ='EXT:cpdevsite/Resources/Private/Language/de.custom.xlf';



