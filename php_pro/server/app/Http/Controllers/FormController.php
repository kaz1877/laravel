<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Form;
use App\Models\Form as ModelsForm;

class FormController extends Controller
{
    public function postpage (Request $request){
        return view ('form');
    }
       
    public function savenew (Request $request){

        $post = new Form;
        $post->title = $request->title;
        $post->main = $request->main;
        $post->save();
        return redirect ('/create');
    }

    public function index(Request $request){
        $data = Form::orderby('created_at','desc') -> get();
        return view('post') -> with(['data' => $data]);
    }

    public function show ($id){
        $data = Form::where('id',$id) -> first();
        return view('show') -> with(['data' => $data]);
    }

    
}
