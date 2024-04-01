<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class postcontroller extends Controller
{
    public function index()
    {
        $allposts =[
            ['id' => 1 , 'title'=>'php' ,'posted-by' => 'arwa' , 'created-at'=>'2023-10-12 5:00'],
            ['id' => 2 , 'title'=>'java' ,'posted-by' => 'mohamed' , 'created-at'=>'2023-11-12 6:00'],
            ['id' => 3 , 'title'=>'css' ,'posted-by' => 'mahmoud' , 'created-at'=>'2023-9-12 7:00'],
            ['id' => 4 , 'title'=>'c#' ,'posted-by' => 'elsaid' , 'created-at'=>'2023-8-12 7:00']
        ];
        return view('posts.index', ["posts" => $allposts]) ;
    }

    public function show($postid)
    {
        $singlepost=[
            'id' => 1 , 'title'=>'php' ,'description'=>'this is description','posted-by' => 'arwa' , 'created-at'=>'2023-10-12 5:00'
        ];
        return view('posts.show',['post'=>$singlepost]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store()
    {
        //get data from user
        $data = request()->all();
        //dd( $data); to check dt
        //restore data in database
        //redirection to posts.index
         return to_route('posts.index');
    }

    public function edit()
    {
        return view('posts.edit');
    }

    public function update()
    {
        $data = request()->all();
        //dd( $data);
        return to_route('posts.show',1);
    }

    public function destroy()
    {
        //delete post from databse
        //redirect to posts.index
        return to_route('posts.index');
    }
}
