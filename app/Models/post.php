<?php

namespace App\Models;


class post extends model
{
    protected $table = 'post';

    public function user()
    {
        return $this->belongsTo(user::class, 'id_user');
    }

    public function coment()
    {
        return $this->hasMany(coment::class, 'id_post');
    }
}
