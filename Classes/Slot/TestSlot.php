<?php
namespace SchamsNet\SignalSlotDemo\Slot;

/*
 * @package     TYPO3
 * @subpackage  signal_slot_demo
 * @author      Michael Schams <schams.net>
 * @link        https://schams.net
 */

use TYPO3\CMS\Core\Log\LogManager;
use TYPO3\CMS\Core\Utility\GeneralUtility;

/**
 * Demo Slot
 */
class DemoSlot
{
    /**
     * Default constructor
     */
    public function __construct()
    {
        /** @var $logger \TYPO3\CMS\Core\Log\Logger */
        $this->logger = GeneralUtility::makeInstance(LogManager::class)->getLogger(__CLASS__);
    }

    /**
     * Log canonical
     *
     * @access public
     * @param ...
     */
    public function logCanonical(&$href): void
    {
        $this->logger->info(__METHOD__ . ' line ' . __LINE__);
    }
}
