<?php

namespace App\Models;

use App\Events\OrderPlaced;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ["order_number", "user_id"];

    // NOTE: This property could be used if we want to fire the event automatically
    // protected $dispatchesEvents = [
    //     "created" => OrderPlaced::class,
    // ];
}
