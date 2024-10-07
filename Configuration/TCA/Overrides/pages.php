<?php

declare(strict_types=1);
defined('TYPO3') or die();


call_user_func(static function(): void {
    // clear the default items for "layout" field to allow for consistent adding of additional items with addItems in
    // PageTSConfig (instead of a combination of altLabels and addItems
    $GLOBALS['TCA']['pages']['columns']['layout']['config']['items'] = [];
    unset($GLOBALS['TCA']['pages']['columns']['layout']['config']['default']);


});
