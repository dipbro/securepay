<?php
namespace Dipesh\SecurePay;

use Illuminate\Support\ServiceProvider;

class SecurePayServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishes([__DIR__ . '/../config/securepay.php.php' => config_path('secure_pay')]);
    }

    public function register()
    {
            $this->app->bind('securepay', function () {
                return new SecurePay();
            });

        $this->mergeConfigFrom(__DIR__ . '/../config/securepay.php', 'securepay');
    }
}