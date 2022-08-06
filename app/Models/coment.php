<?php

namespace App\Models;


class coment extends model
{
    protected $table = 'coment';

    public function post()
    {
        return $this->belongsTo(post::class, 'id_post');
    }

    public function user()
    {
        return $this->belongsTo(user::class, 'id_user');
    }
}
