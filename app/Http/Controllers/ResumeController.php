<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Professional;
use App\Models\Education;
use App\Models\Courses;
use Illuminate\Support\Facades\DB;

class ResumeController extends Controller
{
    public function homePage()
    {
        $xps = Professional::orderBy('endDate', 'desc')
                            ->get();
        $educations = Education::orderBy('endDate', 'desc')
                            ->get();
        $courses = Courses::orderBy('endDate', 'desc')
                            ->get();

        return view('index', compact('xps',
                                'educations',
                                'courses'));
    }

    public function index()
    {
        return redirect()->route('resume.professional', null, 307);
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
