<?php

use Georanma\AmazonMws\AmazonProduct;
use PHPUnit\Framework\TestCase;

/**
 * Generated by PHPUnit_SkeletonGenerator 1.2.0 on 2012-12-12 at 13:17:14.
 */
class AmazonProductTest extends TestCase {

    /**
     * @var AmazonProduct
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp(): void {
        resetLog();
        $this->object = new AmazonProduct('testStore', null, true, null);
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown(): void {

    }

    public function testProduct(){
        $data = simplexml_load_file(__DIR__.'/../../mock/searchProducts.xml');
        $p = $data->ListMatchingProductsResult->Products->Product;
        $obj = new AmazonProduct('testStore', $p, true, null);
        $o = $obj->getData();
        $this->assertInternalType('array',$o);
        $this->assertFalse($this->object->getData());

        $same = $obj->getProduct();
        $this->assertEquals($o,$same);
    }

}

require_once(__DIR__ . '/../helperFunctions.php');
