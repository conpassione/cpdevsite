<?php
declare(strict_types=1);

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

defined('TYPO3') or die();

ExtensionManagementUtility::addTcaSelectItemGroup (
    'tt_content',
    'CType',
    'sliders',
    'Testgruppe',
    'after:common'
);

ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        'label' => 'TestCE',
        'value' => 'cpdevsite_testce',
        'icon' => 'content-text',
        'group' => 'sliders',
        'description' => 'Test Content Element'
    ],
    'text',
    'after'
);
