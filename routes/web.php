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

Route::get('/event', function () {

    // Note: No need for manually firing the event as we do use $dispatchesEvents property inside Order model
    $order = \App\Models\Order::create([
        "order_number" => random_int(1000, 9999),
        "user_id" => 1,
    ]);

    \App\Events\OrderPlaced::dispatch($order);
});

Route::get('/', function () {
    return view('welcome');
});
