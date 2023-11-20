<?php

defined('TYPO3') or die();

call_user_func(static function () {
    $typo3Version = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Information\Typo3Version::class)->getMajorVersion();

    \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
        (
            new \B13\Container\Tca\ContainerConfiguration(
                'tx_commoncontainer__grid_container',
                'Grid container',
                'Grid container',
                [
                    [
                        [
                            'name' => 'Content',
                            'colPos' => 200,
                        ],
                    ],
                ],
            )
        )
        ->setDefaultValues([
            't3easy_ce_classes' => 'grid-x,grid-margin-x',
        ])
        ->setIcon('EXT:container/Resources/Public/Icons/container-1col.svg')
    );

    $GLOBALS['TCA']['tt_content']['types']['tx_commoncontainer__grid_container']['columnsOverrides'] = [
        't3easy_ce_classes' => [
            'config' => [
                'items' => $typo3Version < 12 ? [
                    [
                        'LLL:EXT:common_container/Resources/Private/Language/locallang_ttc.xlf:t3easy_ce_classes.items.grid-x',
                        'grid-x',
                        '',
                        'grid-type',
                    ],
                    [
                        'LLL:EXT:common_container/Resources/Private/Language/locallang_ttc.xlf:t3easy_ce_classes.items.grid-y',
                        'grid-y',
                        '',
                        'grid-type',
                    ],

                    [
                        'LLL:EXT:common_container/Resources/Private/Language/locallang_ttc.xlf:t3easy_ce_classes.items.grid-margin-x',
                        'grid-margin-x',
                        '',
                        'gutter-type',
                    ],
                    [
                        'LLL:EXT:common_container/Resources/Private/Language/locallang_ttc.xlf:t3easy_ce_classes.items.grid-margin-y',
                        'grid-margin-y',
                        '',
                        'gutter-type',
                    ],
                    [
                        'LLL:EXT:common_container/Resources/Private/Language/locallang_ttc.xlf:t3easy_ce_classes.items.grid-padding-x',
                        'grid-padding-x',
                        '',
                        'gutter-type',
                    ],
                    [
                        'LLL:EXT:common_container/Resources/Private/Language/locallang_ttc.xlf:t3easy_ce_classes.items.grid-padding-y',
                        'grid-padding-y',
                        '',
                        'gutter-type',
                    ],
                ] : [
                    [
                        'label' => 'LLL:EXT:common_container/Resources/Private/Language/locallang_ttc.xlf:t3easy_ce_classes.items.grid-x',
                        'value' => 'grid-x',
                        'group' => 'grid-type',
                    ],
                    [
                        'label' => 'LLL:EXT:common_container/Resources/Private/Language/locallang_ttc.xlf:t3easy_ce_classes.items.grid-y',
                        'value' => 'grid-y',
                        'group' => 'grid-type',
                    ],

                    [
                        'label' => 'LLL:EXT:common_container/Resources/Private/Language/locallang_ttc.xlf:t3easy_ce_classes.items.grid-margin-x',
                        'value' => 'grid-margin-x',
                        'group' => 'gutter-type',
                    ],
                    [
                        'label' => 'LLL:EXT:common_container/Resources/Private/Language/locallang_ttc.xlf:t3easy_ce_classes.items.grid-margin-y',
                        'value' => 'grid-margin-y',
                        'group' => 'gutter-type',
                    ],
                    [
                        'label' => 'LLL:EXT:common_container/Resources/Private/Language/locallang_ttc.xlf:t3easy_ce_classes.items.grid-padding-x',
                        'value' => 'grid-padding-x',
                        'group' => 'gutter-type',
                    ],
                    [
                        'label' => 'LLL:EXT:common_container/Resources/Private/Language/locallang_ttc.xlf:t3easy_ce_classes.items.grid-padding-y',
                        'value' => 'grid-padding-y',
                        'group' => 'gutter-type',
                    ],
                ],
                'itemGroups' => [
                    'grid-type' => 'LLL:EXT:common_container/Resources/Private/Language/locallang_ttc.xlf:t3easy_ce_classes.itemGroups.grid-type',
                    'gutter-type' => 'LLL:EXT:common_container/Resources/Private/Language/locallang_ttc.xlf:t3easy_ce_classes.itemGroups.gutter-type',
                ],
                'minitems' => 1,
                'default' => 'grid-x,grid-margin-x',
            ],
        ],
        'layout' => [
            'config' => [
                'items' => $typo3Version < 12 ? [
                    ['LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.default_value', 0],
                    ['LLL:EXT:common_container/Resources/Private/Language/locallang_ttc.xlf:layout.items.1', 1],
                    ['LLL:EXT:common_container/Resources/Private/Language/locallang_ttc.xlf:layout.items.2', 2],
                ] : [
                    ['label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.default_value', 'value' => 0],
                    ['label' => 'LLL:EXT:common_container/Resources/Private/Language/locallang_ttc.xlf:layout.items.1', 'value' => 1],
                    ['label' => 'LLL:EXT:common_container/Resources/Private/Language/locallang_ttc.xlf:layout.items.2', 'value' => 2],
                ],
            ],
        ],
    ];

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addToAllTCAtypes(
        'tt_content',
        '--palette--;;tx_commoncontainer__appearance',
        'tx_commoncontainer__grid_container',
        'replace:--palette--;;frames'
    );
});
