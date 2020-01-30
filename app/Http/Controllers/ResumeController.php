<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Professional;
use App\Models\Education;
use App\Models\Courses;
use App\Models\Blog;
use Illuminate\Support\Facades\DB;
use Artesaos\SEOTools\Traits\SEOTools as SEOToolsTrait;

class ResumeController extends Controller
{
    use SEOToolsTrait;

    public function homePage()
    {
        $this->seo();

        $xps = Professional::orderBy('endDate', 'desc')
                            ->get();
        $educations = Education::orderBy('endDate', 'desc')
                            ->get();
        $courses = Courses::orderBy('endDate', 'desc')
                            ->get();
        $posts = Blog::getContent(3);

        return view('index', compact('xps',
                                'educations',
                                'courses',
                                'posts'));
    }

    public function index()
    {
        $this->seo();
        return redirect()->route('resume.professional', null, 307);
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
