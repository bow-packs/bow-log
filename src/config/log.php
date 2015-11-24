<?php
/**
 * Created by PhpStorm.
 * User: Michael Behr
 * Date: 18.09.15
 * Time: 19:45
 *
 *
 */

/*
| Configuration for BowLog
|
*/
return [
    /*
    | available channels for logging
    | eg. authentication
    |
    */
    'channels' => ['development'],

    /*
    | default channel, if no channel given in code, we call default channel
    | default => null : we are using Illuminate\Facade\Log (laravel default)
    |
    */
    'default' => 'development',
];