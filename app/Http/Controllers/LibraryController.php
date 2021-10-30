<?php

namespace App\Http\Controllers;

use App\Models\Library;
use Illuminate\Http\Request;

class LibraryController extends Controller
{
    public function findAll()
    {

        return view('libary/table',[
            'list' => Library::all()
        ]);
    }

    public function  findByName(Request  $request){
       $name = $request -> get('search');
       return view('libary/table',[
           'list' => Library::where('title','LIKE', '%'.$name.'%')->get()
       ]);
    }
}
