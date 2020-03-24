<?php

namespace Georanma\AmazonMwsService;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Georanma\AmazonMwsService\Skeleton\SkeletonClass
 */
class AmazonMwsServiceFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'amazon-mws-service';
    }
}
