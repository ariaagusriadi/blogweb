<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Foundation\Auth\User;

class auth extends User
{
    protected $KeyType = 'string';
    public $incrementing = false;

    public static function boot()
    {
        parent::boot();
        static::creating(function($item){
            $item->id = (string) Str::orderedUuid();
        });
    }
}
