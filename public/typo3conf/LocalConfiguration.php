<?php
return [
    'BE' => [
        'debug' => true,
        'explicitADmode' => 'explicitAllow',
        'installToolPassword' => '$argon2i$v=19$m=65536,t=16,p=2$VmdSMm5VVEpNNXRLYnhBaQ$Bj7SvoEyb8O3NrdgdHLEZ8o/gTuGeaKxZEAiLDVY9Gs',
        'loginSecurityLevel' => 'normal',
        'passwordHashing' => [
            'className' => 'TYPO3\\CMS\\Core\\Crypto\\PasswordHashing\\Argon2iPasswordHash',
            'options' => [],
        ],
    ],
    'DB' => [
        'Connections' => [
            'Default' => [
                'charset' => 'utf8',
                'driver' => 'mysqli',
            ],
        ],
    ],
    'EXT' => [
        'extConf' => [
            'backend' => 'a:6:{s:9:"loginLogo";s:0:"";s:19:"loginHighlightColor";s:0:"";s:20:"loginBackgroundImage";s:0:"";s:13:"loginFootnote";s:0:"";s:11:"backendLogo";s:0:"";s:14:"backendFavicon";s:0:"";}',
            'bootstrap_package' => 'a:8:{s:16:"disablePageTsRTE";s:1:"0";s:27:"disablePageTsBackendLayouts";s:1:"0";s:20:"disablePageTsTCEMAIN";s:1:"0";s:20:"disablePageTsTCEFORM";s:1:"0";s:28:"disablePageTsContentElements";s:1:"0";s:20:"disableCssProcessing";s:1:"0";s:24:"disableGoogleFontCaching";s:1:"0";s:17:"disableFontLoader";s:1:"0";}',
            'extension_builder' => 'a:3:{s:15:"enableRoundtrip";s:1:"1";s:15:"backupExtension";s:1:"1";s:9:"backupDir";s:35:"uploads/tx_extensionbuilder/backups";}',
            'extensionmanager' => 'a:2:{s:21:"automaticInstallation";s:1:"1";s:11:"offlineMode";s:1:"0";}',
            'scheduler' => 'a:2:{s:11:"maxLifetime";s:4:"1440";s:15:"showSampleTasks";s:1:"1";}',
        ],
    ],
    'EXTENSIONS' => [
        'backend' => [
            'backendFavicon' => '',
            'backendLogo' => '',
            'loginBackgroundImage' => '',
            'loginFootnote' => '',
            'loginHighlightColor' => '',
            'loginLogo' => '',
        ],
        'bootstrap_package' => [
            'disableCssProcessing' => '0',
            'disableFontLoader' => '0',
            'disableGoogleFontCaching' => '0',
            'disablePageTsBackendLayouts' => '0',
            'disablePageTsContentElements' => '0',
            'disablePageTsRTE' => '0',
            'disablePageTsTCEFORM' => '0',
            'disablePageTsTCEMAIN' => '0',
        ],
        'extension_builder' => [
            'backupDir' => 'uploads/tx_extensionbuilder/backups',
            'backupExtension' => '1',
            'enableRoundtrip' => '1',
        ],
        'extensionmanager' => [
            'automaticInstallation' => '1',
            'offlineMode' => '0',
        ],
        'scheduler' => [
            'maxLifetime' => '1440',
            'showSampleTasks' => '1',
        ],
    ],
    'FE' => [
        'debug' => true,
        'loginSecurityLevel' => 'normal',
        'passwordHashing' => [
            'className' => 'TYPO3\\CMS\\Core\\Crypto\\PasswordHashing\\Argon2iPasswordHash',
            'options' => [],
        ],
    ],
    'GFX' => [
        'processor' => 'ImageMagick',
        'processor_allowTemporaryMasksAsPng' => false,
        'processor_colorspace' => 'sRGB',
        'processor_effects' => true,
        'processor_enabled' => true,
        'processor_path' => '/usr/bin/',
        'processor_path_lzw' => '/usr/bin/',
    ],
    'MAIL' => [
        'transport' => 'sendmail',
        'transport_sendmail_command' => '/usr/local/bin/mailhog sendmail test@example.org --smtp-addr 127.0.0.1:1025',
        'transport_smtp_encrypt' => '',
        'transport_smtp_password' => '',
        'transport_smtp_server' => '',
        'transport_smtp_username' => '',
    ],
    'SYS' => [
        'devIPmask' => '*',
        'displayErrors' => 1,
        'encryptionKey' => 'e5d903681ebfac172c33da6b9a7ec08601ef33f8f367365e810d7cbaa0e449e69f8def7d3607f25480ca7c588296a1c8',
        'exceptionalErrors' => 12290,
        'features' => [
            'unifiedPageTranslationHandling' => true,
        ],
        'sitename' => 'Hof Express',
        'systemLogLevel' => 0,
        'systemMaintainers' => [
            1,
        ],
    ],
];
