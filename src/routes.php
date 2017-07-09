<?php

Route::get('/time' , 'RezaSaleki\Time\Controllers\timeController@showTime');
Route::get('/date' , 'RezaSaleki\Time\Controllers\timeController@showDate');

Route::get('/hello' , function(){

    print ("HELLO");

 // Method 1
//  $timer = new \rezasaleki\time\Facade\Timer();
//  return $timer->minutesAgo();

 // Method 2
 // return app('MyTimer')->onHoursAgo();

 // Method 3
// dd(MyTimerFacade::onHoursAgo());

});
?>