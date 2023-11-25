<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Common container',
    'description' => 'Common container elements based on ext:container.',
    'category' => 'misc',
    'author' => 'Jan Kiesewetter',
    'author_email' => 'jan@t3easy.de',
    'author_company' => 't3easy',
    'state' => 'stable',
    'clearCacheOnLoad' => true,
    'version' => '2.0.0-dev',
    'constraints' => [
        'depends' => [
            'typo3' => '10.4.0-12.99.99',
            'container' => '1.0.0-2.99.99',
            't3easy_ce_classes' => '1.1.0-1.99.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
