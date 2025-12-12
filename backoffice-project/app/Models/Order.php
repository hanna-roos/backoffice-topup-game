<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
    'nama',
    'status',
    'total',
    'metode_pembayaran'
];
}
