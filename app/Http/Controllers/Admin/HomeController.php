<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function home(){
        return view('frontend.home.home');
    }
    public function serviceMethod(){
        return view('frontend.service.service');
    }
    public function aboutMethod(){
        return view('frontend.about.about');
    }
    public function contactMethod(){
        return view('frontend.contact.contact');
    }
    public function blogMethod(){
        return view('frontend.blog.blog');
    }
    public function detailsMethod(){
        return view('frontend.blogdetails.details');
    }
}
