<?php

namespace RezaSaleki\Time\Controllers;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;

class timeController extends Controller
{
    public function showTime ()
    {
        $timezone = config('myConfig.Creston');
        $time = Carbon::now()->setTimezone($timezone)->toTimeString();
        return view("myView::time")->with('time' , $time);
//        return  Carbon::now()->toTimeString();
    }

    public function showDate ()
    {
        $date = Carbon::now()->toDateTimeString();
        return view("myView::date")->with('date' , $date);
//        return Carbon::now()->toDateTimeString();
    }

}
