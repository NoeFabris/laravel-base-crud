<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    protected $fillable = [
        'title', 'decsription', 'price', 'thumb', 'series', 'sale_date', 'type',
    ];
}
