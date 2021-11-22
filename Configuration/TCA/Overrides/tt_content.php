<?php

defined('TYPO3_MODE') or die();

$GLOBALS['TCA']['tt_content']['palettes']['tx_commoncontainer__appearance'] = [
    'label' => 'LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:palette.frames',
    'showitem' => '
        layout;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:layout_formlabel,
        frame_class;LLL:EXT:common_container/Resources/Private/Language/locallang_ttc.xlf:frame_class
    ',
];
