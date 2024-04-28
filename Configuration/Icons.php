<?php
declare(strict_types=1);

use TYPO3\CMS\Core\Imaging\IconProvider\BitmapIconProvider;
use TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider;

return [
    // Icon identifier
    'tx-conpassione-content-beside-text-img-left' => [
        // Icon provider class
        'provider' => SvgIconProvider::class,
        // The source SVG for the SvgIconProvider
        'source' => 'EXT:cpdevsite/Resources/Public/Icons/content-beside-text-img-left.svg',
    ],
    'tx-conpassione-content-beside-text-img-left-middle' => [
        // Icon provider class
        'provider' => SvgIconProvider::class,
        // The source SVG for the SvgIconProvider
        'source' => 'EXT:cpdevsite/Resources/Public/Icons/content-beside-text-img-left-middle.svg',
    ],
    'tx-conpassione-content-beside-text-img-left-bottom' => [
        // Icon provider class
        'provider' => SvgIconProvider::class,
        // The source SVG for the SvgIconProvider
        'source' => 'EXT:cpdevsite/Resources/Public/Icons/content-beside-text-img-left-bottom.svg',
    ],

    'tx-conpassione-content-beside-text-img-right' => [
        // Icon provider class
        'provider' => SvgIconProvider::class,
        // The source SVG for the SvgIconProvider
        'source' => 'EXT:cpdevsite/Resources/Public/Icons/content-beside-text-img-right.svg',
    ],
    'tx-conpassione-content-beside-text-img-right-middle' => [
        // Icon provider class
        'provider' => SvgIconProvider::class,
        // The source SVG for the SvgIconProvider
        'source' => 'EXT:cpdevsite/Resources/Public/Icons/content-beside-text-img-right-middle.svg',
    ],
    'tx-conpassione-content-beside-text-img-right-bottom' => [
        // Icon provider class
        'provider' => SvgIconProvider::class,
        // The source SVG for the SvgIconProvider
        'source' => 'EXT:cpdevsite/Resources/Public/Icons/content-beside-text-img-right-bottom.svg',
    ],
    'tx-conpassione-template-simple-site' => [
        // Icon provider class
        'provider' => SvgIconProvider::class,
        // The source SVG for the SvgIconProvider
        'source' => 'EXT:cpdevsite/Resources/Public/Icons/template-simple-site.svg',
    ],


/*    'tx-myext-bitmapicon' => [
        'provider' => BitmapIconProvider::class,
        // The source bitmap file
        'source' => 'EXT:my_extension/Resources/Public/Icons/mybitmap.png',
        // All icon providers provide the possibility to register an icon that spins
        'spinning' => true,
    ],*/
];
