<?php
/**
 * Created by PhpStorm.
 * User: developer
 * Date: 7/9/2017
 * Time: 12:00 PM
 */

namespace rezasaleki\time\Facade;

use Illuminate\Support\Facades\Facade;

class TimerFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'MyTimer';
        //file:routers $this->app->bind('MyTimer');
    }
}