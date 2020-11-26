<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $title = 'Welcome to Index';
        return view('pages.index', compact('title'));
    }

    public function about()
    {
        $title = 'About me';
        return view('pages.about')->with('title', $title);
    }

    public function services()
    {
        $data = array(
            'title' => 'Services',
            'Services' => ['Web design', 'Programming', 'App Developer']
        );
        return view('pages.services')->with($data);
    }
}
