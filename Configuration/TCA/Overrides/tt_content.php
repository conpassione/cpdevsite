<?php
declare(strict_types=1);
defined('TYPO3') or die();

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;
use \TYPO3\CMS\Core\Utility\GeneralUtility;

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
            'cp-2cols5050', // CType
            'LLL:EXT:cpdevsite/Resources/Private/Language/locallang_db.xlf:container.2col5050', // label
            'LLL:EXT:cpdevsite/Resources/Private/Language/locallang_db.xlf:container.2col5050.description', // description
            [
                [
                    ['name' => 'LLL:EXT:cpdevsite/Resources/Private/Language/locallang_db.xlf:container.2col5050.col201', 'colPos' => 201],
                    ['name' => 'LLL:EXT:cpdevsite/Resources/Private/Language/locallang_db.xlf:container.2col5050.col202', 'colPos' => 202]
                ],
            ] // grid configuration
        )
        )
            // set an optional icon configuration
            ->setIcon('EXT:container_example/Resources/Public/Icons/b13-2cols-with-header-container.svg')
            ->setGroup('z-cplayout')
    );

    $additionalColumns = [
        'displaywidth' => [
            'exclude' => true,
            'label' => 'LLL:EXT:cpdevsite/Resources/Private/Language/locallang_db.xlf:tt_content.column.displaywidth',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'default' => 0,
                'items' => [
                    [
                        'label' => 'LLL:EXT:cpdevsite/Resources/Private/Language/locallang_db.xlf:tt_content.column.displaywidth.item0',
                        'value' => '0',
                    ],
                    [
                        'label' => 'LLL:EXT:cpdevsite/Resources/Private/Language/locallang_db.xlf:tt_content.column.displaywidth.item1',
                        'value' => '1',
                    ],
                    [
                        'label' => 'LLL:EXT:cpdevsite/Resources/Private/Language/locallang_db.xlf:tt_content.column.displaywidth.item2',
                        'value' => '2',
                    ],
                ]
            ]
        ],
    ];
    ExtensionManagementUtility::addTCAcolumns('tt_content', $additionalColumns);

    $sections = 'cp-2cols5050';
    ExtensionManagementUtility::addToAllTCAtypes(
        'tt_content',
        'displaywidth',
        $sections,
        'after:sectionIndex');
});
