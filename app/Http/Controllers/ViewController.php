<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function home(){
        return view('admin.index');
    }
    public function buttons(){
            return view('admin.buttons');
    }
    public function cards(){
        return view('admin.cards');
    }
    public function colors(){
        return view('admin.color');
    }
    public function borders(){
        return view('admin.border');
    }
    public function animations(){
        return view('admin.animation');
    }
    public function other(){
        return view('admin.other');
    }
    public function login(){
        return view('admin.login');
    }
    public function register(){
        return view('admin.register');
    }
    public function forgot(){
        return view('admin.forgot');
    }
    public function not404(){
        return view('admin.not404');
    }
    public function blank(){
        return view('admin.blank');
    }
    public function charts(){
        return view('admin.charts');
    }
    public function tables(){
        return view('admin.tables');
    }
}
