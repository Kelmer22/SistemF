<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Image;

class cadastro extends Controller
{
    public function index(){

        return view('cadastro');
    }

    public function cadastro(Request $request)
    {
        $post = new cadastro();
        $post->email = $request->input('nome'); 
        $post->mensagem = $request->input('email'); 
        $post->save();

        return redirect('/');
    }

/*
    public function cadastro(Request $request)
    {
        $post = new cadastro();
        $post->email = $request->input('nome'); 
        $post->mensagem = $request->input('email'); 
        $post->save();

        return redirect('/');
    }

    public function destroy($id) {
        $post = Post::find($id);
        if (isset($post)) {
            Storage::disk('public')->delete($post->arquivo); 
            $post->delete();
        }
        return redirect('/');
    }*/


}
