<?php
declare(strict_types=1);

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

// Typoscript konfigurieren
ExtensionManagementUtility::addStaticFile(
    'cpdevsite',
    'Configuration/TypoScript',
    'Conpassione CPDEV-Sitepackage');
