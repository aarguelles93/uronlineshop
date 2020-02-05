<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
        'description', 'cost', 
    ];

    public function orders(){
        return $this->hasMany(Order::class)->orderBy('created_at','DESC');
    }
}
