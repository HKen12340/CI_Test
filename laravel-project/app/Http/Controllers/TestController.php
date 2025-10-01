<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Content;

class TestController extends Controller
{
    public function index(){
        $result = Content::all();
        //dd($result);
        return view('test',['results' => $result]);
    }
}
