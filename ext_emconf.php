<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "device".
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF['device'] = [
    'title' => 'Device Conditions',
    'description' => 'Provides additional TypoScript conditions for user agent detections based on the Matomo Device Detector library',
    'category' => 'misc',
    'version' => '10.0.1',
    'state' => 'stable',
    'clearcacheonload' => 0,
    'author' => 'Coders.Care',
    'author_email' => 'extensions@coders.care',
    'author_company' => 'Coders.Care',
    'constraints' => [
        'depends' => [
            'typo3' => '9.5.0-10.4.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];

