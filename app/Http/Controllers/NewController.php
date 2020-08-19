<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewController extends Controller
{
    public function Index()
    {
        $data=array(
           'title' => "Muhammad Ijaz has started Php",
           'lang' => ["Abc","M ijaz Ali","Laravel","React "]
        );
        $title="Muhammad Ijaz Ali has started Php";
       return view('index')->with($data);
    }
}
