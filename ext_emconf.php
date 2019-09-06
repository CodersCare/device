<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "tracer".
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
	'title' => 'Tracer - Device Detection',
	'description' => 'Offers additional TypoScript conditions for user agent detections based on the Piwik Device Detector Library',
	'category' => 'misc',
	'version' => '3.12.0',
	'version_comment' => 'The version number of this extension should always be synced with the version of the library in use',
	'state' => 'stable',
	'clearcacheonload' => 0,
	'author' => 'Coders.Care',
	'author_email' => 'extensions@coders.care',
	'author_company' => 'Coders.Care',
	'constraints' => 
	array (
		'depends' => 
		array (
            'typo3' => '9.5.0-0.0.0',
		),
		'conflicts' => 
		array (
		),
		'suggests' => 
		array (
		),
	),
);

