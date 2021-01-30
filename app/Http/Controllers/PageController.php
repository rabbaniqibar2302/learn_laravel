<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about(){
        return 'This is about page';
    }

    public function contact(){
        return 'This is contact page';
    }
}
