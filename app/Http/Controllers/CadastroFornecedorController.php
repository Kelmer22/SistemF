<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Image;

class CadastroFornecedorController extends Controller
{
    public function index(){

        return view('cadastroFornecedor');
    }

    public function CadastroFornecedor(Request $request)
    {
        $post = new CadastroFornecedorController();
        $post->email = $request->input('nome'); 
        $post->mensagem = $request->input('email'); 
        $post->save();

        return redirect('/');
    }
