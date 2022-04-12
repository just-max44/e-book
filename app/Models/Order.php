<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $middleware = [];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
