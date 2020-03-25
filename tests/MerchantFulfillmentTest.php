<?php

namespace Georanma\AmazonMwsService\Tests;

use Georanma\AmazonMwsService\MerchantFulfillment\Fulfillment_Client;
use Illuminate\Foundation\Application;
use Orchestra\Testbench\TestCase;


class MerchantFulfillmentTest extends TestCase
{

    /**
     * @param  Application $app
     * @return array
     */
    protected function getPackageProviders($app)
    {
        return ['Georanma\AmazonMwsService\AmazonMwsServiceProvider'];
    }

    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }

    /**
     * @test
     * @return boolean
     */
    public function it_populate_expected_services()
    {
        return $this->assertTrue($this->app->bound('fulfillment'));
    }

    /** @test */
    public function it_creates_instance_of_merchant_fulfillment_client()
    {
        $client = $this->app->make('fulfillment');
        dd($client);
        $this->assertInstanceOf(Fulfillment_Client::class, $client);
    }
}