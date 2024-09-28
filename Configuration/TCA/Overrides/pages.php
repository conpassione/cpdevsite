<?php
// clear the default items for "layout" field to allow for consistent adding of additional items with addItems in
// PageTSConfig (instead of a combination of altLabels and addItems
$GLOBALS['TCA']['pages']['columns']['layout']['config']['items'] = [];
unset($GLOBALS['TCA']['pages']['columns']['layout']['config']['default']);
