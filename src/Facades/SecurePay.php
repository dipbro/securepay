<?php
namespace Dipesh\SecurePay\Facades;

use Illuminate\Support\Facades\Facade;

class SecurePay extends Facade
{
    /**
     * {@inheritDoc}
     */
    protected static function getFacadeAccessor()
    {
        return 'securepay';
    }
}