<?php

if (getenv('IS_DDEV_PROJECT') == 'true') {
    $GLOBALS['TYPO3_CONF_VARS'] = array_replace_recursive(
        $GLOBALS['TYPO3_CONF_VARS'],
        [
            'DB' => [
                'Connections' => [
                    'Default' => [
                        'dbname' => getenv('TYPO3_DB_DBNAME'),
                        'driver' => getenv('TYPO3_DB_DRIVER'),
                        'host' => getenv('TYPO3_DB_HOST'),
                        'password' => getenv('TYPO3_DB_PASSWORD'),
                        'port' => getenv('TYPO3_DB_PORT'),
                        'user' => getenv('TYPO3_DB_USERNAME'),
                    ],
                ],
            ],
            'EXTENSIONS' => [
                'backend' => [
                    'backendFavicon' => '',
                    'backendLogo' => 'EXT:' . getenv('TYPO3_EXT_IDENTIFIER') . '/Resources/Public/Images/alfabeta.svg',
                    'loginBackgroundImage' => 'EXT:' . getenv('TYPO3_EXT_IDENTIFIER') . '/Resources/Public/Images/bernesealps.png',
                    'loginFootnote' => '(c) by conPassione gmbh',
                    'loginHighlightColor' => '',
                    'loginLogo' => 'EXT:' . getenv('TYPO3_EXT_IDENTIFIER') . '/Resources/Public/Images/logo_cp_core_G35_black_mit.png',
                    'loginLogoAlt' => 'conPassione gmbh',
                ],
            ],
            // This GFX configuration allows processing by installed ImageMagick 6
            'GFX' => [
                'processor' => 'ImageMagick',
                'processor_path' => '/usr/bin/',
                'processor_path_lzw' => '/usr/bin/',
            ],
            // This mail configuration sends all emails to mailpit
            'MAIL' => [
                'transport' => 'smtp',
                'transport_smtp_encrypt' => false,
                'transport_smtp_server' => 'localhost:1025',
            ],
            'SYS' => [
                'trustedHostsPattern' => '.*.*',
                'features' => [
                    'security.backend.htmlSanitizeRte' => true,
                    'security.usePasswordPolicyForFrontendUsers' => true,
                ],
            ],
        ]
    );
} else {
    $GLOBALS['TYPO3_CONF_VARS'] = array_replace_recursive(
        $GLOBALS['TYPO3_CONF_VARS'],
        [
            'EXTENSIONS' => [
                'backend' => [
                    'backendFavicon' => '',
                    'backendLogo' => 'EXT:' . getenv('TYPO3_EXT_IDENTIFIER') . '/Resources/Public/Images/alfabeta.svg',
                    'loginBackgroundImage' => 'EXT:' . getenv('TYPO3_EXT_IDENTIFIER') . '/Resources/Public/Images/bernesealps.png',
                    'loginFootnote' => '(c) by conPassione gmbh',
                    'loginHighlightColor' => '',
                    'loginLogo' => 'EXT:' . getenv('TYPO3_EXT_IDENTIFIER') . '/Resources/Public/Images/logo_cp_core_G35_black_mit.png',
                    'loginLogoAlt' => 'conPassione gmbh',
                ],
            ]
        ]
    );
}

$GLOBALS['TYPO3_CONF_VARS'] = array_replace_recursive(
    $GLOBALS['TYPO3_CONF_VARS'],
    [
        'BE' => [
            'compressionLevel' => '5'
        ],
        'EXTCONF' => [
            'lang' => [
                'availableLanguages' => [
                    'de',
                    'fr',
                    'it'
                ]
            ]
        ],
        'FE' => [
            'compressionLevel' => '5'
        ],
        'SYS' => [
            'UTF8filesystem' => true,
            'defaultScheme' => 'https',
            'trustedHostsPattern' => getenv('TYPO3_SYS_HOSTPATTERN'),
            'features' => [
                'security.backend.htmlSanitizeRte' => true,
                'security.usePasswordPolicyForFrontendUsers' => true,
            ],
            'phpTimeZone' => 'Europe/Zurich',
            'systemLocale' => 'de_CH.UTF-8',
        ],
    ]
);
