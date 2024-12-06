<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TenantController;

Route::get('/', function () {
    return view('overview');
});

Route::resource('tenants', TenantController::class);
