<?php
declare(strict_types=1);
defined('TYPO3') or die();

$GLOBALS['TCA']['fe_users'] = array_replace_recursive(
$GLOBALS['TCA']['fe_users'],
[
        'ctrl' => [
            'default_sortby' => 'name',
            'label' => 'name',
        ]
    ]
);
