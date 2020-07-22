<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //main page
    public function home(){
        return view('home');
    }

    public function indexprojects(){
        return view ('pages.indexprojects');
    }
    public function about(){
        return view ('pages.about');
    }
    public function skills(){
        return view ('pages.skills');
    }

    //projects
    public function cssa(){
        return view('pages.projects.cssanimation.cssa');
    }
    public function transition(){
        return view('pages.projects.cssanimation.transition');
    }
    public function nokiagame(){
        return view ('pages.projects.nokiagame.nokiagame');
    }

}
