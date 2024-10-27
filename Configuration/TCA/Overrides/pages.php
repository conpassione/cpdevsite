<?php

declare(strict_types=1);
defined('TYPO3') or die();

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

call_user_func(static function(): void {
    // clear the default items for "layout" field to allow for consistent adding of additional items with addItems in
    // PageTSConfig (instead of a combination of altLabels and addItems
    $GLOBALS['TCA']['pages']['columns']['layout']['config']['items'] = [];
    unset($GLOBALS['TCA']['pages']['columns']['layout']['config']['default']);

    // zusätzliche Icons für Folder-Seiten ... enthält Plugin Feld
    $GLOBALS['TCA']['pages']['columns']['module']['config']['items'][] = [
        'label' => 'LLL:EXT:cpdevsite/Resources/Private/Language/locallang_db.xlf:pagetype.memberlist.label',
        'icon' => 'tx-conpassione-memberlist',
        'value'=>   'memberlist'
    ];
    $GLOBALS['TCA']['pages']['ctrl']['typeicon_classes']['contains-memberlist'] = 'tx-conpassione-memberlist';

    // Add group 'landingpage' to Page Types Selection
    ExtensionManagementUtility::addTcaSelectItemGroup(
        'pages',
        'doktype',
        'landingpage',
        'LLL:EXT:cpdevsite/Resources/Private/Language/locallang_db.xlf:pagewizard.landingpage.groupLabel',
        'after:default'
    );

    // Add group 'gallery' to Page Types Selection
    ExtensionManagementUtility::addTcaSelectItemGroup(
        'pages',
        'doktype',
        'gallery',
        'LLL:EXT:cpdevsite/Resources/Private/Language/locallang_db.xlf:pagewizard.gallery.groupLabel',
        'after:default'
    );

    // Add group 'agenda' to Page Types Selection
    ExtensionManagementUtility::addTcaSelectItemGroup(
        'pages',
        'doktype',
        'agenda',
        'LLL:EXT:cpdevsite/Resources/Private/Language/locallang_db.xlf:pagewizard.agenda.groupLabel',
        'after:default'
    );

    // Bugfix for content-blocks
    // List all pages ot add the standard fields
    $doktypes = '36650001,36650011,36650012,36650021,36650022';

    // update TCA (add abstract) to unify BE for Standard and Custom Pages
    ExtensionManagementUtility::addToAllTCAtypes(
        'pages',
        'abstract',
        $doktypes,
        'before:keywords'
    );

    // add editorial fields to palette
    ExtensionManagementUtility::addFieldsToPalette(
        'pages',
        'editorial',
        'author, author_email, lastUpdated'
    );

    // add editorial palette to pages
    ExtensionManagementUtility::addToAllTCAtypes(
        'pages',
        '--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.editorial;editorial',
        $doktypes,
        'after:palette:metatags'
    );

    // add media palette to pages
    ExtensionManagementUtility::addToAllTCAtypes(
        'pages',
        'media',
        $doktypes,
        'before:tsconfig_includes'
    );

    // layout fields to palette
    ExtensionManagementUtility::addFieldsToPalette(
        'pages',
        'layout',
        'layout,newUntil'
    );

    // add layout palette to pages
    ExtensionManagementUtility::addToAllTCAtypes(
        'pages',
        '--palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.palettes.layout;layout',
        $doktypes,
        'before:palette:backend_layout'
    );
});
