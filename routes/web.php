<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/event', function () {

    // Note: No need for manually firing the event as we do use $dispatchesEvents property inside Order model
    $order = \App\Models\Order::create([
        "order_number" => random_int(1000, 9999),
        "user_id" => 1,
    ]);

    \App\Events\OrderPlaced::dispatch($order);
});

Route::get('/notifications', function () { return view("notifications"); });

Route::get('/like', function () {
    event(new \App\Events\NotifyLikedUsers('Someone'));
    
    return "Event has been sent !";
});
