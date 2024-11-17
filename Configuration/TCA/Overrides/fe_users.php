<?php
declare(strict_types=1);
defined('TYPO3') or die();

use TYPO3\CMS\Core\Utility\ExtensionManagementUtility;

call_user_func(static function (): void {

    // fe_users per default nach Name anstatt uid sortieren
    if (ExtensionManagementUtility::isLoaded('felogin')) {
        $GLOBALS['TCA']['fe_users'] = array_replace_recursive(
            $GLOBALS['TCA']['fe_users'],
            [
                'ctrl' => [
                    'default_sortby' => 'active desc,name',
                    'label' => 'name',
                    'label_alt' => 'city,mobile,email,active',
                    'label_alt_force' => true
                ]
            ]
        );
    }
    $additionalColumns = [
        'mobile' => [
            'exclude' => true,
            'label' => 'LLL:EXT:cpdevsite/Resources/Private/Language/locallang_db.xlf:fe_users.column.mobile',
            'config' => [
                'type' => 'input',
                'size' => '20',
                'eval' => 'trim'
            ]
        ],
        'active' => [
            'exclude' => true,
            'label' => 'LLL:EXT:cpdevsite/Resources/Private/Language/locallang_db.xlf:fe_users.column.active',
            'config' => [
                'type' => 'check',
                'renderType' => 'checkboxToggle',
                'default' => 1,
                'items' => [
                    [
                        'label' => 'LLL:EXT:cpdevsite/Resources/Private/Language/locallang_db.xlf:fe_users.column.active.label'
                    ]
                ]
            ]
        ]
    ];
    ExtensionManagementUtility::addTCAcolumns('fe_users', $additionalColumns);
    ExtensionManagementUtility::addToAllTCAtypes('fe_users', 'mobile','','after:telephone');
    ExtensionManagementUtility::addToAllTCAtypes('fe_users', 'active','','after:password');

});
