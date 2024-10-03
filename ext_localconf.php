<?php
declare(strict_types=1);
defined('TYPO3') or die();

// CK-Editor Konfiguration laden
if (empty($GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['cpdefault'])) {
    $GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['cpdefault'] = 'EXT:cpdevsite/Configuration/RTE/RTEsettings.yaml';
}

// CK-Editor Konfiguration laden mit Code-Auszeichnung
if (empty($GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['cpdefaultCode'])) {
    $GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['cpdefaultCode'] = 'EXT:cpdevsite/Configuration/RTE/RTEsettingsCode.yaml';
}


// Add custom translations overriding cpdefault labels
// $GLOBALS['TYPO3_CONF_VARS']['SYS']['locallangXMLOverride']['EXT:frontend/Resources/Private/Language/locallang_tca.xlf'][] = 'EXT:cpdevsite/Resources/Private/Language/custom.xlf';
// $GLOBALS['TYPO3_CONF_VARS']['SYS']['locallangXMLOverride']['de']['EXT:frontend/Resources/Private/Language/locallang_tca.xlf'][] ='EXT:cpdevsite/Resources/Private/Language/de.custom.xlf';



