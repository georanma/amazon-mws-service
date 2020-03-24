<?php

namespace Georanma\AmazonMwsService\Tests;

use Georanma\AmazonMws\AmazonMerchantShippingServices;

class AmazonMerchantShippingServicesTest extends AmazonTestCase
{
     /**
     * @test
     */
    public function it_should_set_shipment_request_details()
    {
        $shippingServices = new AmazonMerchantShippingServices('testStore', true, null);
        $this->assertEquals([], $shippingServices->setRequestDetails());
    }
}
