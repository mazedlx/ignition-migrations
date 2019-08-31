<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Tab API Routes
|--------------------------------------------------------------------------
|
| Here is where you may register API routes for your tab. These routes
| are loaded by the ServiceProvider of your tab. They will only be
| loaded when your application is in debug mode. Now, go build!
|
*/

Route::post('status', \Mazedlx\MigrationsTab\Http\Controllers\StatusController::class);
Route::post('migrate', \Mazedlx\MigrationsTab\Http\Controllers\MigrateController::class);
Route::post('rollback', \Mazedlx\MigrationsTab\Http\Controllers\RollbackController::class);
Route::post('fresh', \Mazedlx\MigrationsTab\Http\Controllers\FreshController::class);
Route::post('reset', \Mazedlx\MigrationsTab\Http\Controllers\ResetController::class);
