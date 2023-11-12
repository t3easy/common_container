<?php
defined('TYPO3') or die();

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
    'common_container',
    'Configuration/TypoScript/',
    'Common container'
);
