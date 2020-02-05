<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $guarded = [];

    public function requests()
    {
        return $this->hasMany(Request::class)->orderBy('created_at','DESC');
    }

    public function article(){
        return $this->belongsTo(Article::class);
    }
}
