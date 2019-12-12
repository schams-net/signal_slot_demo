<?php

/*
 * @package     TYPO3
 * @subpackage  signal_slot_demo
 * @author      Michael Schams <schams.net>
 * @link        https://schams.net
 */

$EM_CONF[$_EXTKEY] = array(
    'title' => 'Signal/Slot Demo Extension',
    'description' => '',
    'category' => 'misc',
    'version' => '0.0.1',
    'module' => '',
    'state' => 'experimental',
    'createDirs' => '',
    'clearcacheonload' => 0,
    'author' => 'Michael Schams (schams.net)',
    'author_email' => 'schams.net',
    'author_company' => 'https://schams.net',
    'constraints' => [
        'depends' => [
            'typo3' => '9.0.0-9.5.99'
        ],
        'conflicts' => [],
        'suggests' => []
    ]
);
