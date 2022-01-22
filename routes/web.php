<?php

use App\Http\Controllers\MonitoringController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/monitoring');

Route::resource('/monitoring', MonitoringController::class)->names('monitoring')->except('show')->scoped(['monitoring' => 'project_leader']);
