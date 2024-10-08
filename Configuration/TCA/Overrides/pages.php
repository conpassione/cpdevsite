<?php

declare(strict_types=1);
defined('TYPO3') or die();

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

call_user_func(static function(): void {
    // clear the default items for "layout" field to allow for consistent adding of additional items with addItems in
    // PageTSConfig (instead of a combination of altLabels and addItems
    $GLOBALS['TCA']['pages']['columns']['layout']['config']['items'] = [];
    unset($GLOBALS['TCA']['pages']['columns']['layout']['config']['default']);

    $doktypes = '36650001,36650002';

    ExtensionManagementUtility::addToAllTCAtypes(
        'pages',
        'abstract',
        $doktypes,
        'before:keywords'
    );

    ExtensionManagementUtility::addFieldsToPalette(
        'pages',
        'editorial',
        'author, author_email, lastUpdated'
    );

    ExtensionManagementUtility::addToAllTCAtypes(
        'pages',
        '--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.editorial;editorial',
        $doktypes,
        'after:palette:metatags'
    );

    ExtensionManagementUtility::addToAllTCAtypes(
        'pages',
        'media',
        $doktypes,
        'before:tsconfig_includes'
    );
});
