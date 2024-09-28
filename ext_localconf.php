<?php
declare(strict_types=1);

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
// use TYPO3\CMS\Core\Imaging\IconProvider\BitmapIconProvider;
// use TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider;

defined('TYPO3') or die();

// CK-Editor Konfiguration laden
if (empty($GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets'][getenv('TYPO3_EXT_IDENTIFIER')])) {
    $GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets'][getenv('TYPO3_EXT_IDENTIFIER')] = 'EXT:' . getenv('TYPO3_EXT_IDENTIFIER') . '/Configuration/RTE/RTEsettings.yaml';
}

// CK-Editor Konfiguration laden mit Code-Auszeichnung
if (empty($GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets'][getenv('TYPO3_EXT_IDENTIFIER') . 'Code'])) {
    $GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets'][getenv('TYPO3_EXT_IDENTIFIER') . 'Code'] = 'EXT:' . getenv('TYPO3_EXT_IDENTIFIER') . '/Configuration/RTE/RTEsettingsCode.yaml';
}


// Add custom translations overriding default labels
// $GLOBALS['TYPO3_CONF_VARS']['SYS']['locallangXMLOverride']['EXT:frontend/Resources/Private/Language/locallang_tca.xlf'][] = 'EXT:' . getenv('TYPO3_EXT_IDENTIFIER') .
// '/Resources/Private/Language/custom.xlf';
// $GLOBALS['TYPO3_CONF_VARS']['SYS']['locallangXMLOverride']['de']['EXT:frontend/Resources/Private/Language/locallang_tca.xlf'][] ='EXT:' . getenv('TYPO3_EXT_IDENTIFIER') .
// '/Resources/Private/Language/de.custom.xlf';



