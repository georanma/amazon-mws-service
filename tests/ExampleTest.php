<?php

namespace Georanma\AmazonMwsService\Tests;

use Orchestra\Testbench\TestCase;
use Georanma\AmazonMwsService\AmazonMwsServiceServiceProvider;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [AmazonMwsServiceServiceProvider::class];
    }
    
    /** @test */
    public function true_is_true()
    {
        $this->assertTrue(true);
    }
}
