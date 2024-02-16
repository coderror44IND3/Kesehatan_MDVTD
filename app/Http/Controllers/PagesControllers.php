<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesControllers extends Controller
{
    public function index(){
        return view('pages.layouts.index');
    }

    public function main(){
        return view('pages.layouts.main');
    }
}
