<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schedule;


  
Schedule::command('app:get-sport-fixture cricket')->everyMinute();
Schedule::command('app:get-sport-fixture soccer')->everyMinute();
Schedule::command('app:get-sport-fixture tennis')->everyMinute();