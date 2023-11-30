<?php

defined('TYPO3') or die();

call_user_func(static function () {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
        'common_container',
        'Configuration/TypoScript/Standalone/',
        'Standalone'
    );

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
        'common_container',
        'Configuration/TypoScript/WithFluidStyledContent/',
        'Together with Fluid Content Elements'
    );
});
