<?php
/**
 * Created by PhpStorm.
 * User: michael
 * Date: 18.09.15
 * Time: 11:37
 */

namespace Bow\Log;

use Bow\Log\LogWriterDispatcher;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Log;

/**
 * Class LogServiceProvider
 */
class LogServiceProvider extends ServiceProvider
{
    /**
     * boot Provider and check for existing config
     */
    public function boot() {

        $configChannels = config('bow.log.channels');

        if (count($configChannels) <= 0 ) {
            Log::debug('bow.log.channels is not configured');
        }
    }

    /**
     * register 'bowlog' LogWriterDispatcher as ServiceProvider
     * @see Bow\Log\LogWriterDispatcher
     */
    public function register()
    {
        $this->publishes([
            __DIR__.'/config/log.php' => config_path('bow/log.php'),
        ],'config');

        $this->app->instance('bowlog', new LogWriterDispatcher() );
    }

}