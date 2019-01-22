<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $title = 'Welcome to NEITagram!';
        // return  view('pages.index', compact('title'));
        return  view('pages.index') ->with ('title', $title);
    }

    public function about()
    {
        $title = 'Abouit us';
        return  view('pages.about') -> with ('title', $title);
    }

    public function services()
    {
        $data = array(
            'title' => 'Services',
            'services' => ['Web design', 'Programming', 'Database Exp']
        );
        return  view('pages.services')->with($data);
    }
}

