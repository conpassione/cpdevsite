<?php

if (getenv('IS_DDEV_PROJECT') == 'true') {
    $GLOBALS['TYPO3_CONF_VARS'] = array_replace_recursive(
        $GLOBALS['TYPO3_CONF_VARS'],
        [
            'BE' => [
                'compressionLevel' => '5'
            ],
            'DB' => [
                'Connections' => [
                    'Default' => [
                        'dbname' => 'db',
                        'driver' => 'mysqli',
                        'host' => 'db',
                        'password' => 'db',
                        'port' => '3306',
                        'user' => 'db',
                    ],
                ],
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
            'EXTENSIONS' => [
                'backend' => [
                    'backendFavicon' => '',
                    'backendLogo' => 'fileadmin/alfabeta.svg',
                    'loginBackgroundImage' => '',
                    'loginFootnote' => '',
                    'loginHighlightColor' => '',
                    'loginLogo' => '',
                    'loginLogoAlt' => '',
                ],
            ],
            'FE' => [
                'compressionLevel' => '5'
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
                'UTF8filesystem' => true,
                'defaultScheme' => 'https',
                'trustedHostsPattern' => '.*.*',
                'features' => [
                    'security.backend.htmlSanitizeRte' => true,
                    'security.usePasswordPolicyForFrontendUsers' => true,
                ],
                'phpTimeZone' => 'Europe/Zurich',
                'systemLocale' => 'de_CH.UTF-8',
            ],
        ]
    );
}
