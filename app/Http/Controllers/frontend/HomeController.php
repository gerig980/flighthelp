<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    public function index()
    {
        return view('frontend.home');
    }

    public function thankyou()
    {
        return view('frontend.thankyou');
    }

    public function ourfee()
    {
        return view('frontend.our-fee');
    }

    public function terms()
    {
        return view('frontend.terms');
    }

    public function privacy()
    {
        return view('frontend.privacy');
    }
}
