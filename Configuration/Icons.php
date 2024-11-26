<?php
declare(strict_types=1);

use TYPO3\CMS\Core\Imaging\IconProvider\BitmapIconProvider;
use TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider;

return [
    'tx-conpassione-memberlist' => [
        'provider' => SvgIconProvider::class,
        'source' => 'EXT:cpdevsite/Resources/Public/Icons/cpmemberlist.svg',
    ],

    'tx-conpassione-member' => [
        'provider' => SvgIconProvider::class,
        'source' => 'EXT:cpdevsite/Resources/Public/Icons/cpmember.svg',
    ],

    'tx-conpassione-memberfunction' => [
        'provider' => SvgIconProvider::class,
        'source' => 'EXT:cpdevsite/Resources/Public/Icons/cpmemberfunction.svg',
    ],

     //  Im BackendLayout wird das Icon direkt vom File geladen, damit das Icon grösser dargestellt werden kann
    'tx-conpassione-backendlayout' => [
        'provider' => SvgIconProvider::class,
        'source' => 'EXT:cpdevsite/Resources/Public/Icons/backendlayout.svg',
    ],

    'tx-conpassione-content-beside-text-img-left' => [
        'provider' => SvgIconProvider::class,
        'source' => 'EXT:cpdevsite/Resources/Public/Icons/content-beside-text-img-left.svg',
    ],
    'tx-conpassione-content-beside-text-img-left-middle' => [
        'provider' => SvgIconProvider::class,
        'source' => 'EXT:cpdevsite/Resources/Public/Icons/content-beside-text-img-left-middle.svg',
    ],
    'tx-conpassione-content-beside-text-img-left-bottom' => [
        'provider' => SvgIconProvider::class,
        'source' => 'EXT:cpdevsite/Resources/Public/Icons/content-beside-text-img-left-bottom.svg',
    ],
    'tx-conpassione-content-beside-text-img-right' => [
        'provider' => SvgIconProvider::class,
        'source' => 'EXT:cpdevsite/Resources/Public/Icons/content-beside-text-img-right.svg',
    ],
    'tx-conpassione-content-beside-text-img-right-middle' => [
        'provider' => SvgIconProvider::class,
        'source' => 'EXT:cpdevsite/Resources/Public/Icons/content-beside-text-img-right-middle.svg',
    ],
    'tx-conpassione-content-beside-text-img-right-bottom' => [
        'provider' => SvgIconProvider::class,
        'source' => 'EXT:cpdevsite/Resources/Public/Icons/content-beside-text-img-right-bottom.svg',
    ],

/*    'tx-myext-bitmapicon' => [
        'provider' => BitmapIconProvider::class,
        'source' => 'EXT:my_extension/Resources/Public/Icons/mybitmap.png',
        // All icon providers provide the possibility to register an icon that spins
        'spinning' => true,
    ],*/
];
