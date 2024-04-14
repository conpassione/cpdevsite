<?php
declare(strict_types=1);

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addUserTSConfig('@import "EXT:cpdevsite/Configuration/TsConfig/User/user.tsconfig"');

// CK-Editor Konfiguration laden
//if (empty($GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['cpdevsite'])) {
    $GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['cpdevsite'] = 'EXT:cpdevsite/Configuration/RTE/RTEsettings.yaml';
//}
