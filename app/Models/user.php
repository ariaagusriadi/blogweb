<?php

namespace App\Models;
class user extends auth
{
    protected $table = 'user';

    public function post()
    {
        return $this->hasMany(post::class, 'id_user');
    }
    public function coment()
    {
        return $this->hasMany(coment::class, 'id_user');
    }
}
