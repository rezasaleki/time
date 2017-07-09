<?php
/**
 * Created by PhpStorm.
 * User: developer
 * Date: 7/9/2017
 * Time: 11:01 AM
 */

namespace rezasaleki\time\Facade;
use Carbon\Carbon;

class Timer
{
    public $time = null;

    function __construct()
    {
        $this->time = Carbon::now()->setTimezone('asia/tehran');
    }

    function onHoursAgo ()
    {
        return ($this->time->subHour(1)->toDateTimeString());
    }

    function minutesAgo()
    {
        return ($this->time->subMinute(1)->toDateTimeString());
    }

    function aQuartAgo()
    {
        return ($this->time->subSecond(1)->toDateTimeString());
    }
}