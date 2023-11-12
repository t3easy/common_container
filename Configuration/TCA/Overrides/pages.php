<?php
defined('TYPO3') or die();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
    'common_container',
    'Configuration/PageTs/main.tsconfig',
    'Common container'
);