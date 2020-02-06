<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Professional;
use App\Models\Education;
use App\Models\Courses;
use App\Models\Blog;
use App\Models\Volunteer;
use App\Models\Certifications;
use Artesaos\SEOTools\Traits\SEOTools as SEOToolsTrait;

class ResumeController extends Controller
{
    use SEOToolsTrait;

    public function homePage()
    {
        $this->seo();

        $xps = Professional::orderBy('endDate', 'desc')->get();
        $educations = Education::orderBy('endDate', 'desc')->get();
        $courses = Courses::orderBy('endDate', 'desc')->get();
        $posts = Blog::getContent(3);
        $volunteers = Volunteer::orderby('endDate', 'desc')->get();
        $certifications = Certifications::orderby('endDate', 'desc')->get();

        return view('index', compact('xps',
                'educations', 'courses',
                'posts', 'volunteers',
                'certifications')
        );
    }

    public function professional()
    {
        $this->seo();
        $this->seo()->setTitle('Experiência Profissional');

        $xps = Professional::orderBy('endDate', 'desc')->get();

        return view('resume.detailed.professional', compact(('xps')));
    }

    public function education()
    {
        $this->seo();
        $this->seo()->setTitle('Histórico Acadêmico');

        $educations = Education::orderBy('endDate', 'desc')->get();

        return view('resume.detailed.education', compact(('educations')));
    }

    public function volunteer()
    {
        $this->seo();
        $this->seo()->setTitle('Trabalhos Voluntários');

        $volunteers = Volunteer::orderby('endDate', 'desc')->get();

        return view('resume.detailed.volunteer', compact(('volunteers')));
    }

    public function certifications()
    {
        $this->seo();
        $this->seo()->setTitle('Certificações e Reconhecimentos');

        $certifications = Certifications::orderby('endDate', 'desc')->get();

        return view('resume.detailed.certifications', compact(('certifications')));
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
