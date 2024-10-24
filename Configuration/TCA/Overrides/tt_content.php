<?php
declare(strict_types=1);
defined('TYPO3') or die();

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

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
        'conpassione',
        'LLL:EXT:cpdevsite/Resources/Private/Language/locallang_db.xlf:contentwizard.conpassione.groupLabel',
        'before:default'
    );


    // TCA für header-Field überschreiben, damit der RTE zum Editieren verwendet werden kann
    // siehe: https://daniel-siepmann.de/typo3-rte-for-input-fields.html
    $GLOBALS['TCA']['tt_content']['columns']['header']['config'] = [
        'type' =>'text',
        'max' => 35,
        'rows' => 1,
        'cols' => 35,
        'enableRichtext' => true,
        'richtextConfiguration' => 'CpMinimal'
    ];
});
