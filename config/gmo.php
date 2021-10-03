<?php

return [

    'url' => env('GMO_URL', 'https://pt01.mul-pay.jp'),
    'shop_id' => env('GMO_SHOP_ID', ''),
    'shop_pass' => env('GMO_SHOP_PASS', ''),
    'site_id' => env('GMO_SITE_ID', ''),
    'site_pass' => env('GMO_SITE_PASS', ''),

    'test_site_ids' => array_filter(explode(',', env('GMO_TEST_SITE_IDS', ''))),
    'test_site_passwords' => array_filter(explode(',', env('GMO_TEST_SITE_PASSWORDS', ''))),

    'test_shop_ids' => array_filter(explode(',', env('GMO_TEST_SHOP_IDS', ''))),
    'test_shop_passwords' => array_filter(explode(',', env('GMO_TEST_SHOP_PASSWORDS', ''))),

    /**
     * There is communication with the card companies in each of the following
     * processes: [settlement execution]/[settlement execution after
     * authentication]/[settlement change]/[card registration].
     * Considering a delay in the process, a timeout will occur within
     * 60 seconds. For the merchant, please set a value 60+ seconds
     * for the timeout with our service. The value we recommend
     * is about 90 seconds.
     */

    /**
     * There is communication with the user authentication service in each of
     * the following processes: [settlement execution]/[settlement execution
     * after authentication]. Considering a delay in the process, a timeout
     * will occur within 30 seconds. For the merchant, please set a value
     * 30+ seconds for the timeout with our service. Considering the
     * communication with the card company, we recommend a value of
     * about 120 seconds.
     */

    'request_timeout' => 120,

];
