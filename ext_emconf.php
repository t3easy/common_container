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
    'version' => '1.0.1',
    'constraints' => [
        'depends' => [
            'typo3' => '9.5.0-11.5.99',
            'container' => '1.3.1-1.99.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
