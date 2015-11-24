<?php
/**
 * Created by PhpStorm.
 * User: Michael Behr
 * Date: 18.09.15
 * Time: 20:48
 */

namespace Bow\Log\Support\Facades;

/**
 * @see \Illuminate\Log\Writer
 * @see \Bow\Log\LogServiceProvider
 */
use Illuminate\Support\Facades\Facade;

class BowLog extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'bowlog';
    }
}