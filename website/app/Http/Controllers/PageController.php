<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function welcome(){
        return view('index');
    } 
    
    public function about(){
        return view('about');
    }
    
    public function northcambridge(){
        return view('ncrooms');
    }
    
    public function montinola(){
        return view('mrooms');
    }
    
    public function gallery(){
        return view('gallery');
    }
    
    public function contactus(){
        return view('contact');
    }
    
    public function book(){
        return view('booking');
    }
    
}
