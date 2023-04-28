<?php

defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function ($extKey) {
        $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['scheduler']['tasks']
                [\TYPO3\CMS\Scheduler\Task\TableGarbageCollectionTask::class]['options']['tables']
                ['tx_formdoubleoptin_domain_model_optin'] = [
            'dateField' => 'tstamp',
            'expirePeriod' => 14,
        ];
    },
    'form_double_opt_in'
);
