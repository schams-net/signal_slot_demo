<?php

/*
 * @package     TYPO3
 * @subpackage  signal_slot_demo
 * @author      Michael Schams <schams.net>
 * @link        https://schams.net
 */

if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

// Instantiate SignalSlotDispatcher
$signalSlotDispatcher = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(
    TYPO3\CMS\Extbase\SignalSlot\Dispatcher::class
);

// Connect Signal to Slot
$signalSlotDispatcher->connect(
    \TYPO3\CMS\Seo\Canonical\CanonicalGenerator::class,
    'beforeGeneratingCanonical',
    \SchamsNet\SignalSlotDemo\Slot\DemoSlot::class,
    'logCanonical',
    true
);

$logging = [
    \TYPO3\CMS\Core\Log\LogLevel::INFO => [
        \TYPO3\CMS\Core\Log\Writer\FileWriter::class => [
            'logFile' => 'typo3temp/logs/' . $_EXTKEY . '.log'
        ]
    ]
];

$GLOBALS['TYPO3_CONF_VARS']['LOG']['SchamsNet']['SignalSlotDemo']['Slot']['writerConfiguration'] = $logging;
unset($logging);
