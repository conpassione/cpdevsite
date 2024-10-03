<?php

declare(strict_types=1);
defined('TYPO3') or die();

// clear the default items for "layout" field to allow for consistent adding of additional items with addItems in
// PageTSConfig (instead of a combination of altLabels and addItems
$GLOBALS['TCA']['pages']['columns']['layout']['config']['items'] = [];
unset($GLOBALS['TCA']['pages']['columns']['layout']['config']['default']);

return [
    'types' => [
        // homepage
        '36650002' => [
            'showitem' => '
                    --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
                        --palette--;;standard,
                        --palette--;;title,
                    --dgit iv--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.metadata,
                        --palette--;;abstract,
                        --palette--;;metatags,
                        --palette--;;editorial,
                    --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.appearance,
                        --palette--;;layout,
                        --palette--;;replace,
                    --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.behaviour,
                        --palette--;;links,
                        --palette--;;caching,
                        --palette--;;miscellaneous,
                        --palette--;;module,
                    --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.resources,
                        --palette--;;media,
                        --palette--;;config,
                    --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
                        --palette--;;language,
                    --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_tca.xlf:pages.tabs.access,
                        --palette--;;visibility,
                        --palette--;;access,
                    --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
                        categories,
                    --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
                        rowDescription,
                    --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
                ',
        ]
    ]
];
