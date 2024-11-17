<?php
declare(strict_types=1);
defined('TYPO3') or die();

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

call_user_func(static function(): void {
    ExtensionManagementUtility::addTcaSelectItemGroup(
        'tx_conpassione_staff',
        'title',
        'conpassione',
        'LLL:EXT:cpdevsite/Resources/Private/Language/locallang_db.xlf:recordType.groupname',
        'bottom'
    );
});
