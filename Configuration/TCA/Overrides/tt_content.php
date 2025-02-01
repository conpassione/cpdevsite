<?php
declare(strict_types=1);
defined('TYPO3') or die();

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use TYPO3\CMS\Core\Utility\GeneralUtility;

call_user_func(static function(): void {
    // Defaulteinstellungen für Feld layout löschen
    $GLOBALS['TCA']['tt_content']['columns']['layout']['config']['items'] = [];
    unset($GLOBALS['TCA']['tt_content']['columns']['layout']['config']['default']);

    // Defaulteinstellungen für Feld frame_class löschen
    $GLOBALS['TCA']['tt_content']['columns']['frame_class']['config']['items'] = [];
    unset($GLOBALS['TCA']['tt_content']['columns']['frame_class']['config']['default']);

    // Zusätzliche Gruppe im newContentWizard erstellen
    ExtensionManagementUtility::addTcaSelectItemGroup(
        'tt_content',
        'CType',
        'z-cpextensions',
        'LLL:EXT:cpdevsite/Resources/Private/Language/locallang_db.xlf:contentwizard.z-cpextensions.groupLabel',
        'after:default'
    );
    // Zusätzliche Gruppe im newContentWizard erstellen
    ExtensionManagementUtility::addTcaSelectItemGroup(
        'tt_content',
        'CType',
        'z-cplayout',
        'LLL:EXT:cpdevsite/Resources/Private/Language/locallang_db.xlf:contentwizard.z-cplayout.groupLabel',
        'after:default'
    );

    // TCA für header-Field überschreiben, damit der RTE zum Editieren verwendet werden kann
    // siehe: https://daniel-siepmann.de/typo3-rte-for-input-fields.html
    $GLOBALS['TCA']['tt_content']['columns']['header']['config'] = [
        'type' =>'text',
        'max' => 35,
        'rows' => 1,
        'cols' => 30,
        'enableRichtext' => true,
        'richtextConfiguration' => 'CpMinimal'
    ];

    /* containers */
    GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer (
        (
            new \B13\Container\Tca\ContainerConfiguration(
                'cp-1col', // CType
                'LLL:EXT:cpdevsite/Resources/Private/Language/locallang_db.xlf:container.1col', // label
                'LLL:EXT:cpdevsite/Resources/Private/Language/locallang_db.xlf:container.1col.description', // description
                [
                    [
                        ['name' => 'LLL:EXT:cpdevsite/Resources/Private/Language/locallang_db.xlf:container.1col.col201', 'colPos' => 201],
                    ],
                ] // grid configuration
            )
        )
        // set an optional icon configuration
        ->setIcon('tx-conpassione-cp-1col')
        ->setGroup('z-cplayout')
    );

    /* containers */
    GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer (
        (
        new \B13\Container\Tca\ContainerConfiguration(
            'cp-2cols5050', // CType
            'LLL:EXT:cpdevsite/Resources/Private/Language/locallang_db.xlf:container.2cols5050', // label
            'LLL:EXT:cpdevsite/Resources/Private/Language/locallang_db.xlf:container.2cols5050.description', // description
            [
                [
                    ['name' => 'LLL:EXT:cpdevsite/Resources/Private/Language/locallang_db.xlf:container.2cols.col201', 'colPos' => 201],
                    ['name' => 'LLL:EXT:cpdevsite/Resources/Private/Language/locallang_db.xlf:container.2cols.col202', 'colPos' => 202]
                ],
            ] // grid configuration
        )
        )
            // set an optional icon configuration
            ->setIcon('tx-conpassione-cp-2cols5050')
            ->setGroup('z-cplayout')
    );

    GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer (
        (
        new \B13\Container\Tca\ContainerConfiguration(
            'cp-2cols3366', // CType
            'LLL:EXT:cpdevsite/Resources/Private/Language/locallang_db.xlf:container.2cols3366', // label
            'LLL:EXT:cpdevsite/Resources/Private/Language/locallang_db.xlf:container.2cols3366.description', // description
            [
                [
                    ['name' => 'LLL:EXT:cpdevsite/Resources/Private/Language/locallang_db.xlf:container.2cols.col201', 'colPos' => 201],
                    ['name' => 'LLL:EXT:cpdevsite/Resources/Private/Language/locallang_db.xlf:container.2cols.col202', 'colPos' => 202, 'colspan' => 2]
                ],
            ] // grid configuration
        )
        )
            // set an optional icon configuration
            ->setIcon('tx-conpassione-cp-2cols3366')
            ->setGroup('z-cplayout')
    );

    GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer (
        (
        new \B13\Container\Tca\ContainerConfiguration(
            'cp-2cols6633', // CType
            'LLL:EXT:cpdevsite/Resources/Private/Language/locallang_db.xlf:container.2cols6633', // label
            'LLL:EXT:cpdevsite/Resources/Private/Language/locallang_db.xlf:container.2cols6633.description', // description
            [
                [
                    ['name' => 'LLL:EXT:cpdevsite/Resources/Private/Language/locallang_db.xlf:container.2cols.col201', 'colPos' => 201, 'colspan' => 2,],
                    ['name' => 'LLL:EXT:cpdevsite/Resources/Private/Language/locallang_db.xlf:container.2cols.col202', 'colPos' => 202],
                ],
            ] // grid configuration
        )
        )
            // set an optional icon configuration
            ->setIcon('tx-conpassione-cp-2cols6633')
            ->setGroup('z-cplayout')
    );

    GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer (
        (
        new \B13\Container\Tca\ContainerConfiguration(
            'cp-3cols', // CType
            'LLL:EXT:cpdevsite/Resources/Private/Language/locallang_db.xlf:container.3cols', // label
            'LLL:EXT:cpdevsite/Resources/Private/Language/locallang_db.xlf:container.3cols.description', // description
            [
                [
                    ['name' => 'LLL:EXT:cpdevsite/Resources/Private/Language/locallang_db.xlf:container.3cols.col201', 'colPos' => 201],
                    ['name' => 'LLL:EXT:cpdevsite/Resources/Private/Language/locallang_db.xlf:container.3cols.col202', 'colPos' => 202],
                    ['name' => 'LLL:EXT:cpdevsite/Resources/Private/Language/locallang_db.xlf:container.3cols.col203', 'colPos' => 203]
                ],
            ] // grid configuration
        )
        )
            // set an optional icon configuration
            ->setIcon('tx-conpassione-cp-3cols')
            ->setGroup('z-cplayout')
    );

    $additionalColumns = [
        'sectionlayout' => [
            'exclude' => true,
            'label' => 'LLL:EXT:cpdevsite/Resources/Private/Language/locallang_db.xlf:tt_content.column.sectionlayout',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'default' => '',
                'items' => [
                    [
                        'label' => 'LLL:EXT:cpdevsite/Resources/Private/Language/locallang_db.xlf:tt_content.column.sectionlayout.item0',
                        'value' => '',
                    ],
                    [
                        'label' => 'LLL:EXT:cpdevsite/Resources/Private/Language/locallang_db.xlf:tt_content.column.sectionlayout.item1',
                        'value' => 'breakout',
                    ],
                    [
                        'label' => 'LLL:EXT:cpdevsite/Resources/Private/Language/locallang_db.xlf:tt_content.column.sectionlayout.item2',
                        'value' => 'full-width',
                    ],
                ]
            ]
        ],
        'contentlayout' => [
            'exclude' => true,
            'label' => 'LLL:EXT:cpdevsite/Resources/Private/Language/locallang_db.xlf:tt_content.column.contentlayout',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'default' => '',
                'items' => [
                    [
                        'label' => 'LLL:EXT:cpdevsite/Resources/Private/Language/locallang_db.xlf:tt_content.column.contentlayout.item0',
                        'value' => '',
                    ],
                    [
                        'label' => 'LLL:EXT:cpdevsite/Resources/Private/Language/locallang_db.xlf:tt_content.column.contentlayout.item1',
                        'value' => 'breakout',
                    ],
                    [
                        'label' => 'LLL:EXT:cpdevsite/Resources/Private/Language/locallang_db.xlf:tt_content.column.contentlayout.item2',
                        'value' => 'full-width',
                    ],
                ]
            ]
        ],
    ];
    ExtensionManagementUtility::addTCAcolumns('tt_content', $additionalColumns);

    $sections = 'cp-1col,cp-2cols5050,cp-2cols3366,cp-2cols6633,cp-3cols';
    ExtensionManagementUtility::addFieldsToPalette(
        'tt_content',
        'cplayout',
        'sectionlayout,contentlayout,'
    );

    ExtensionManagementUtility::addToAllTCAtypes(
        'tt_content',
        '--palette--;Layout;cplayout',
        $sections,
        'after:sectionIndex');
});
