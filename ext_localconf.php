<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function ($extKey) {
        /**
         * TCEMain hook
         */
        $GLOBALS ['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass'][$extKey] =
            \Digitalwerk\DwContentProtector\Hooks\TCEmainHook::class;
        $GLOBALS ['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processCmdmapClass'][$extKey] =
            \Digitalwerk\DwContentProtector\Hooks\TCEmainHook::class;
    },
    $_EXTKEY
);
