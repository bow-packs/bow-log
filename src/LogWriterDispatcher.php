<?php
/**
 * Created by PhpStorm.
 * User: Michael Behr
 * Date: 18.09.15
 * Time: 19:04
 */

namespace Bow\Log;


use Illuminate\Log\Writer;
use Illuminate\Support\Facades\Log;
use Monolog\Logger;

/**
 * Class LogWriterDispatcher
 * @package App\Log
 */
class LogWriterDispatcher
{

    /**
     * Get all available channels from config
     *
     * @return array
     */
    public function getChannels()
    {
        $configChannels = config('bow.log.channels');

        if (count($configChannels) <= 0 ) {
            Log::debug('bow.log.channels is not configured');
        }
        return $configChannels;
    }

    /**
     * Use the returned Writer-Instance to log
     * uses laravel Log if no channel present/configured
     *
     * @see Illuminate\Log\Writer
     *
     * @param $name string Channelname to log to
     *
     * @return Writer
     */
    public function channel($name)
    {
        $configChannels = $this->getChannels();

        if (in_array($name, $configChannels))
        {
            //Log::debug(print_r($configChannels, true));
            $monolog = new Logger($name);
            return new Writer($monolog, app(null)['events']);
        } else {
            Log::warning('Trying to log to unknown channel, using laravel default');
            return app()->make('log');
        }
    }

}