<?php
declare(strict_types=1);
defined('TYPO3') or die();

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

// CK-Editor Konfiguration laden
if (empty($GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['CpDefault'])) {
    $GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['CpDefault'] = 'EXT:cpdevsite/Configuration/RTE/CpDefault.yaml';
}

// CK-Editor Konfiguration laden mit Code-Auszeichnung
if (empty($GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['CpDefaultCode'])) {
    $GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['CpDefaultCode'] = 'EXT:cpdevsite/Configuration/RTE/CpDefaultCode.yaml';
}

// CK-Editor Konfiguration laden mit Tablellen-Auszeichnung
if (empty($GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['CpDefaultTable'])) {
    $GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['CpDefaultTable'] = 'EXT:cpdevsite/Configuration/RTE/CpDefaultTable.yaml';
}

// CK-Editor minimale Konfiguration laden
if (empty($GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['CpMinimal'])) {
    $GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['CpMinimal'] = 'EXT:cpdevsite/Configuration/RTE/CpMinimal.yaml';
}


// Add custom translations overriding cpdefault labels
$GLOBALS['TYPO3_CONF_VARS']['SYS']['locallangXMLOverride']['EXT:frontend/Resources/Private/Language/locallang_tca.xlf'][] = 'EXT:cpdevsite/Resources/Private/Language/customtca.xlf';
$GLOBALS['TYPO3_CONF_VARS']['SYS']['locallangXMLOverride']['de']['EXT:frontend/Resources/Private/Language/locallang_tca.xlf'][] ='EXT:cpdevsite/Resources/Private/Language/de.customtca.xlf';
$GLOBALS['TYPO3_CONF_VARS']['SYS']['locallangXMLOverride']['fr']['EXT:frontend/Resources/Private/Language/locallang_tca.xlf'][] ='EXT:cpdevsite/Resources/Private/Language/fr.customtca.xlf';
$GLOBALS['TYPO3_CONF_VARS']['SYS']['locallangXMLOverride']['it']['EXT:frontend/Resources/Private/Language/locallang_tca.xlf'][] ='EXT:cpdevsite/Resources/Private/Language/it.customtca.xlf';

// Define TypoScript as content rendering template.
// This is normally set in Fluid Styled Content.
$GLOBALS['TYPO3_CONF_VARS']['FE']['contentRenderingTemplates'][] = 'cpdevsite/Configuration/TypoScript/Rendering/';
