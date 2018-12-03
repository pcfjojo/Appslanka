<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        date_default_timezone_set('Asia/Calcutta');
        $hour = date('G');
        $hour = 10;
        return view('pages.home', 
        [
            'company' => 'Apps lanka software solutions',
            'tagline' => 'Let us make some innovative applications',
            'hour' => $hour    
        ]);
    }

    public function about(){
        return view('pages.about');
    }

    public function contact(){
        return view('pages.contact');
    }

    public function teams(){
        return view('pages.teams', [
              "totalmembers" => 50  
        ]);
    }
}
