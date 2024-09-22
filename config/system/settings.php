<?php
return [
    'BE' => [
        'debug' => true,
        'installToolPassword' => '$argon2i$v=19$m=65536,t=16,p=1$ZmdhOTNpUTJnSElVdHhBcg$fasrXGsqi6mwu13LC/t7ZD8om+uxPQTfzyu21D+cVd8',
        'passwordHashing' => [
            'className' => 'TYPO3\\CMS\\Core\\Crypto\\PasswordHashing\\Argon2iPasswordHash',
            'options' => [],
        ],
    ],
    'DB' => [
        'Connections' => [
            'Default' => [
                'charset' => 'utf8mb4',
                'dbname' => 'db',
                'driver' => 'mysqli',
                'host' => 'db',
                'password' => 'db',
                'port' => 3306,
                'tableoptions' => [
                    'charset' => 'utf8mb4',
                    'collate' => 'utf8mb4_unicode_ci',
                ],
                'user' => 'db',
            ],
        ],
    ],
    'EXTENSIONS' => [
        'backend' => [
            'backendFavicon' => '',
            'backendLogo' => 'cpdevsite',
            'loginBackgroundImage' => 'EXT:cpdevsite/Resources/Public/Images/bernesealps.png',
            'loginFootnote' => 'created by conPassione gmbh',
            'loginHighlightColor' => '#009ee0',
            'loginLogo' => 'cpdevsite',
            'loginLogoAlt' => 'conPassione gmbh',
        ],
        'extensionmanager' => [
            'automaticInstallation' => '1',
            'offlineMode' => '0',
        ],
        'redirects' => [
            'showCheckIntegrityInfoInReports' => '1',
            'showCheckIntegrityInfoInReportsSeconds' => '86400',
        ],
        'scheduler' => [
            'maxLifetime' => '1440',
        ],
    ],
    'FE' => [
        'debug' => true,
        'passwordHashing' => [
            'className' => 'TYPO3\\CMS\\Core\\Crypto\\PasswordHashing\\Argon2iPasswordHash',
            'options' => [],
        ],
    ],
    'GFX' => [
        'processor' => 'GraphicsMagick',
        'processor_effects' => false,
        'processor_enabled' => true,
        'processor_path' => '/usr/bin/',
    ],
    'LOG' => [
        'TYPO3' => [
            'CMS' => [
                'deprecations' => [
                    'writerConfiguration' => [
                        'notice' => [
                            'TYPO3\CMS\Core\Log\Writer\FileWriter' => [
                                'disabled' => false,
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
    'MAIL' => [
        'transport' => 'sendmail',
        'transport_sendmail_command' => '/usr/local/bin/mailpit sendmail -t --smtp-addr 127.0.0.1:1025',
        'transport_smtp_encrypt' => '',
        'transport_smtp_password' => '',
        'transport_smtp_server' => '',
        'transport_smtp_username' => '',
    ],
    'SYS' => [
        'UTF8filesystem' => true,
        'caching' => [
            'cacheConfigurations' => [
                'hash' => [
                    'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\Typo3DatabaseBackend',
                ],
                'imagesizes' => [
                    'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\Typo3DatabaseBackend',
                    'options' => [
                        'compression' => true,
                    ],
                ],
                'pages' => [
                    'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\Typo3DatabaseBackend',
                    'options' => [
                        'compression' => true,
                    ],
                ],
                'rootline' => [
                    'backend' => 'TYPO3\\CMS\\Core\\Cache\\Backend\\Typo3DatabaseBackend',
                    'options' => [
                        'compression' => true,
                    ],
                ],
            ],
        ],
        'defaultScheme' => 'https',
        'devIPmask' => '*',
        'displayErrors' => 1,
        'encryptionKey' => '3ed1a7e8559425f4fadf07bfaab2479fa5f9f6ba4d5e37ba773455cb4e3476f9beed40bd366d729acda4d27789ca0d58',
        'exceptionalErrors' => 12290,
        'features' => [
            'security.backend.htmlSanitizeRte' => true,
        ],
        'phpTimeZone' => 'Europe/Zurich',
        'sitename' => 'CPdev-cpdevsite',
        'systemLocale' => 'de_CH.utf8',
        'systemMaintainers' => [
            1,
        ],
        'trustedHostsPattern' => 'cpdevsite.ddev.site',
    ],
];
