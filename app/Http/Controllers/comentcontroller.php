<?php

namespace App\Http\Controllers;

use App\Models\coment;
use Illuminate\Http\Request;

class comentcontroller extends Controller
{
    public function coment(Request $request)
    {
        $request->validate([
            'body' => 'required'
        ]);

        $coment = new coment();
        $coment->id_user = request()->user()->id;
        $coment->id_post = request('id_post');
        $coment->body = request('body');
        $coment->save();
        return back();
    }
}
