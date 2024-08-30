<?php

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
                'backendFavicon' => getenv('TYPO3_BE_FAVICON'),
                'backendLogo' =>  getenv('TYPO3_EXT_IDENTIFIER') ,
                'loginBackgroundImage' => getenv('TYPO3_EXT_IDENTIFIER'),
                'loginFootnote' => getenv('TYPO3_BE_LOGINFOOTNOTE'),
                'loginHighlightColor' => getenv('TYPO3_BE_HIGHLIGHTCOLOR'),
                'loginLogo' => getenv('TYPO3_EXT_IDENTIFIER'),
                'loginLogoAlt' => getenv('TYPO3_BE_LOGINLOGOALT'),
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

        // This GFX configuration allows processing by installed ImageMagick 6
        'GFX' => [
            'processor' => 'ImageMagick',
            'processor_path' => '/usr/bin/',
            'processor_path_lzw' => '/usr/bin/',
        ],
        // This mail configuration sends all emails to mailpit
        'MAIL' => [
            'transport' => getenv('MAIL_TRANSPORT'),
            'transport_sendmail_command' => getenv('MAIL_SENDMAIL_COMMAND'),
            'transport_smtp_encrypt' => getenv('MAIL_SMTP_ENCRYPT'),
            'transport_smtp_server' => getenv('MAIL_SMTP_SERVER'),
            'transport_smtp_port' => getenv('MAIL_SMTP_PORT'),
            'transport_smtp_user' => getenv('MAIL_SMTP_USER'),
            'transport_smtp_pass' => getenv('MAIL_SMTP_PASSWORD'),
        ],
        'SYS' => [
            'UTF8filesystem' => true,
            'defaultScheme' => 'https',
            'trustedHostsPattern' => getenv('TYPO3_SYS_HOSTPATTERN'),
            'phpTimeZone' => 'Europe/Zurich',
            'systemLocale' => 'de_CH.UTF-8',
            'features' => [
                'security.backend.htmlSanitizeRte' => true,
                'security.usePasswordPolicyForFrontendUsers' => true,
            ],
        ],
    ]
);
