<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;

class homecontroller extends Controller
{
    public function index()
    {
        $data['list_post'] = post::all();
        return view('home.index', $data);
    }
    public function create()
    {
        return view('home.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'foto' => 'required|file',
            'body' => 'required',
        ]);

        $user = request()->user()->id;
        $post = new post();
        $post->id_user = $user;
        $post->title = request('title');
        $post->body = request('body');
        $post->save();
        if(request('foto')){
            $to = "foto". date('y');
            $extension = request()->file('foto')->extension();
            $url = request()->file('foto')->storeAs($to, 'foto.' . $extension );
            $post->foto = $url;
            $post->save();
        }

        return redirect('/home');
    }
    public function show(post $post)
    {
        $data['post'] = $post;
        return view('home.show', $data);
    }
}
