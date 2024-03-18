<?php
declare(strict_types=1);

use TYPO3\CMS\Core\Imaging\IconProvider\BitmapIconProvider;
use TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider;

return [
    // Icon identifier
    'tx-conpassione-alfabeta' => [
        // Icon provider class
        'provider' => SvgIconProvider::class,
        // The source SVG for the SvgIconProvider
        'source' => 'EXT:cpdevsite/Resources/Public/Icons/alfabeta.svg',
    ],
/*    'tx-myext-bitmapicon' => [
        'provider' => BitmapIconProvider::class,
        // The source bitmap file
        'source' => 'EXT:my_extension/Resources/Public/Icons/mybitmap.png',
        // All icon providers provide the possibility to register an icon that spins
        'spinning' => true,
    ],*/
];
