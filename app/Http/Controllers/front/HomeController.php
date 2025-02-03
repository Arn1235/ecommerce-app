<?php

namespace App\Http\Controllers\front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('front/index');
    }
    public function productlist(){
        return view('front/product-list');
    }
    public function productdetails(){
        return view('front/product-details');
    }
}
