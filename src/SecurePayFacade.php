<?php
namespace Dipesh\SecurePay;

use Illuminate\Support\Facades\Facade;

class SecurePayFacade extends Facade
{
    /**
     * {@inheritDoc}
     */
    protected static function getFacadeAccessor()
    {
        return 'securepay';
    }
}