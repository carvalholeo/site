<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SocialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return redirect()->route('resume.bio');
    }

    public function blog()
    {
        $url = 'https://medium.com/@carvalho_leo';
        return redirect()->away($url);
    }

    public function twitter()
    {
        $url = 'https://twitter.com/_carvalho_leo';
        return redirect()->away($url);
    }

    public function linkedin()
    {
        $url = 'https://www.linkedin.com/in/carvalholeo/';
        return redirect()->away($url);
    }

    public function instagram()
    {
        $url = 'https://instagram.com/carvalho_leo';
        return redirect()->away($url);
    }

    public function wordpress()
    {
        $url = 'https://carvalholeo.wordpress.com';
        return redirect()->away($url);
    }
}
