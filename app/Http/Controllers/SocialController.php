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
        return view('social.index');
    }

    public function youtube() {
        return view('social.youtube');
    }

    public function facebook()
    {
        return redirect('social', 301);
    }

    public function blog()
    {
        return view('social.blog');
    }

    public function twitter()
    {
        return view('social.twitter');
    }

    public function linkedin()
    {
        return view('social.linkedin');
    }

    public function instagram()
    {
        return view('social.instagram');
    }

    public function wordpress()
    {
        return view('social.wordpress');
    }

    public function github()
    {
        return view('social.github');
    }

    public function pinterest()
    {
        return view('social.pinterest');
    }
    public function telegram()
    {
        return view('social.telegram');
    }
    public function stackoverflow()
    {
        return view('social.stackoverflow');
    }
    public function whatsapp()
    {
        return view('social.whatsapp');
    }
}
