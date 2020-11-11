<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('pages.index');
    }
    public function order(){
        return view('pages.order');
    }
    public function bill(){
        return view('pages.bill');
    }
    public function remild(){
        return view('pages.remild');
    }
}
