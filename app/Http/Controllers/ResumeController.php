<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResumeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return redirect()->route('resume.professional');
    }

    public function professional()
    {
        return view ('resume.professional');
    }

    public function skills()
    {
        return view ('construction');
    }

    public function academic()
    {
        return view ('resume.academic');
    }

    public function hobbies()
    {
        return view ('construction');
    }

    public function courses()
    {
        return view ('resume.courses');
    }

    public function bio()
    {
        return view ('construction');
    }
}
