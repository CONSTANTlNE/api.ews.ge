<?php

use App\Jobs\HttpRequestJobAuto;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Schedule;
Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote')->hourly();


//Schedule::job(new HttpRequestJobAuto())->daily();

Schedule::job(new HttpRequestJobAuto())->everyFifteenSeconds();
