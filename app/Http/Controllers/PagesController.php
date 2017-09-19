<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        if (view()->exists('pages.index'))
        {
            //return view('pages.index', ['text' => '<b>laravel</b>']);    
            return view('pages.index')
                -> with ('text', '<b>Laravel</b>')
                -> with ('name', '<b>Charmaine</b>')
                -> with (['location'=> 'europe', 'planet'=>'earth']);
        }
        else {
            return 'no view available';
        }        
    }

    public function profile() {
        return view ('pages.profile');
    }

    public function settings(){
        return view ('pages.settings');
    }

    public function blade(){
        $sex = 'male';
        $text = 'hello world';
        return view ('blade.bladetest', compact('sex', 'text'));
    }
}
