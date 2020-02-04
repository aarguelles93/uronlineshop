<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Request extends Model
{

    protected $fillable = [
        'request_id', 'order_id', 'status', 'process_url', 'expiration',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
