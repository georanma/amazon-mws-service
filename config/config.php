<?php

/*
 * You can place your custom package configuration in here.
 */
return [
    'store' => [
        'store1' => [
            'merchantId' => '',
            'marketplaceId' => '',
            'keyId' => '',
            'secretKey' => '',
            'authToken' => '',
            'amazonServiceUrl' => 'https://mws.amazonservices.com/',
            /**
             * Optional settings for SOCKS5 proxy
             *
            'proxy_info' => [
            'ip' => '127.0.0.1',
            'port' => 8080,
            'user_pwd' => 'user:password',
            ],
             */
        ]
    ],
    'endpoint_release_date' => [
        'MerchantFulfillment' => '2015-06-01'
    ],
    'muteLog' => false
];
