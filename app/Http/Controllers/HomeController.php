<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $articles = DB::table('articles')->get();
        
        return view ('home', compact('articles'));
    }
}
