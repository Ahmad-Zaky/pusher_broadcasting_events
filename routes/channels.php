<?php

use App\Models\Order;
use Illuminate\Support\Facades\Broadcast;

/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/


// NOTE: This will be used in case we are using authenticated channels
// Broadcast::channel('orders.{orderId}', function ($user, $orderId) {
//     return (int) $user->id === (int) Order::find($orderId)->user_id;
// });

Broadcast::channel('orders', function () {
    return true;
});
