<?php
declare(strict_types=1);

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

// Typoscript konfigurieren
ExtensionManagementUtility::addStaticFile(
    getenv('TYPO3_EXT_IDENTIFIER'),
    'Configuration/TypoScript',
    'Conpassione Sitepackage DEV');
