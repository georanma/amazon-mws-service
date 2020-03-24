<?php

namespace Georanma\AmazonMwsService\Tests;

use Orchestra\Testbench\TestCase;
use Georanma\AmazonMwsService\AmazonMwsServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [AmazonMwsServiceProvider::class];
    }

    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
