<?php
declare(strict_types=1);

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

// Defaulteinstellungen für Feld layout löschen
$GLOBALS['TCA']['tt_content']['columns']['layout']['config']['items'] = [];
unset($GLOBALS['TCA']['tt_content']['columns']['layout']['config']['default']);

// Defaulteinstellungen für Feld frame_class löschen
$GLOBALS['TCA']['tt_content']['columns']['frame_class']['config']['items'] = [];
unset($GLOBALS['TCA']['tt_content']['columns']['frame_class']['config']['default']);

/*ExtensionManagementUtility::addTcaSelectItemGroup (
    'tt_content',
    'CType',
    'sliders',
    'LLL:EXT:' . getenv('TYPO3_EXT_IDENTIFIER') . '/Resources/Private/Language/locallang_db.xlf:contentwizard.sliders.grouLabel',
    'after:default'
);

ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'label' => 'LLL:EXT:' . getenv('TYPO3_EXT_IDENTIFIER') . '/Resources/Private/Language/locallang_db.xlf:contentwizard.sliders.slider1.label',
        'value' => 'cpdevsite_testce',
        'icon' => 'tx-conpassione-alfabeta',
        'group' => 'sliders',
        'description' => 'LLL:EXT:' . getenv('TYPO3_EXT_IDENTIFIER') . '/Resources/Private/Language/locallang_db.xlf:contentwizard.sliders.slider1.description'
    ],
    'text',
    'after'
);*/
