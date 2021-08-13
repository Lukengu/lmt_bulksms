<?php


namespace Loecos\Bulksms\BulkSMS\Providers;
use Illuminate\Support\ServiceProvider;
use Loecos\Bulksms\BulkSMS\BulkSMS;


class BulkSMSServiceProvider extends ServiceProvider
{



    /**
     * Publishes configuration file.
     *
     * @return  void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../../../config/bulksms.php' => config_path('bulksms.php'),
        ], 'bulksms');
    }
    /**
     * Make config publishment optional by merging the config from the package.
     *
     * @return  void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../../../config/bulksms.php',
            'bulksms'
        );
        $this->app->bind('bulksms', function($app) {
            return new BulkSMS();
        });
    }
}
