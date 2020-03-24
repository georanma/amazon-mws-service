<?php

namespace Georanma\AmazonMwsService\Tests;

use Illuminate\Foundation\Application;
use Orchestra\Testbench\TestCase;

abstract class AmazonTestCase extends TestCase
{
    /**
     * Define environment setup.
     *
     * @param  Application $app
     * @return void
     */
    protected function getEnvironmentSetUp($app)
    {
        // Setup default database to use sqlite :memory:
        $app['config']->set('amazon-mws.muteLog', 'Info');
        $app['config']->set('amazon-mws.AMAZON_SERVICE_URL', 'http://localhost/');
        $app['config']->set(
            'amazon-mws.store', [
                'testStore' => [
                    'merchantId' => 'ABC_MARKET_1234',
                    'marketplaceId' => 'ABC3456789456',
                    'keyId' => 'key',
                    'secretkey' => 'secret',
                ],
            ],
        );
    }

    /**
     * @param  Application $app
     * @return array
     */
    protected function getPackageProviders($app)
    {
        return ['Georanma\AmazonMwsService\AmazonMwsServiceProvider'];
    }

}

require_once __DIR__ . '/helperFunctions.php';
