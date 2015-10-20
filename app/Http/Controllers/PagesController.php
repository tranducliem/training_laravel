<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function about(){
        return view('pages.about');
    }

    public function about_me(){
        $data = [];
        $data['name'] = 'Name';
        $data['age'] = 'Age';
        return view('pages.about_me', $data);
    }

    public function contact(){
        return view('pages.contact');
    }
}
