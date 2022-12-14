<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
	return view('welcome');
});

Route::get('/info', function() {
	return response([
		'DB_HOST' => env('DB_HOST'),
		'DB_CONNECTION' => env('DB_CONNECTION'),
		'DB_DATABASE' => env('DB_DATABASE'),
		'DB_PORT' => env('DB_PORT'),
		'DB_USERNAME' => env('DB_USERNAME'),
		'DB_PASSWORD' => env('DB_PASSWORD'),
	]);
});
