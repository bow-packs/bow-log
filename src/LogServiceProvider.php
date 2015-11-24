<?php
/**
 * Created by PhpStorm.
 * User: michael
 * Date: 18.09.15
 * Time: 11:37
 */

namespace Bow\Log;

use Illuminate\Support\ServiceProvider;


/**
 * Class LogServiceProvider
 */
class LogServiceProvider extends ServiceProvider
{
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