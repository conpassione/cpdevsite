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
                    'default_sortby' => 'name',
                    'label' => 'name',
                ]
            ]
        );
    }
});
