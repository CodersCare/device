<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "device".
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
	'title' => 'Device',
	'description' => 'Offers additional TypoScript conditions for user agent detections based on the Piwik Device Detector Library',
	'category' => 'misc',
	'version' => '9.0.0',
	'state' => 'stable',
	'clearcacheonload' => 0,
	'author' => 'Coders.Care',
	'author_email' => 'extensions@coders.care',
	'author_company' => 'Coders.Care',
	'constraints' => 
	array (
		'depends' => 
		array (
            'typo3' => '9.5.0-9.5.99',
		),
		'conflicts' => 
		array (
		),
		'suggests' => 
		array (
		),
	),
);

