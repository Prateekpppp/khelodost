<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schedule;


  
Schedule::command('app:get-sport-fixture cricket')->everySecond();
Schedule::command('app:get-sport-fixture soccer')->everySecond();
Schedule::command('app:get-sport-fixture tennis')->everySecond();