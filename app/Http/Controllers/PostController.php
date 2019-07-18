<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;


class PostController extends Controller

{

    public function index()
    {

    	return view('Post.index');

    }

   public function show(){

   	return view('Post.show');
   } 

}
