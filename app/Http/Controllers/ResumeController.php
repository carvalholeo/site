<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResumeController extends Controller
{
    public function homePage()
    {
        return view('index');
    }

    public function index()
    {
        return redirect()->route('resume.professional','',307);
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
        return view ('resume.bio');
    }

    public function download()
    {
        $file = public_path() . "/storage/download/curriculo.pdf";
        $headers = [
            "Content-Type" => "application/pdf",
        ];
        return response()->download($file, 'CV Leonardo Carvalho.pdf', $headers);
    }
}
