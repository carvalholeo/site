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
        $this->seo()->setTitle('Página Inicial');

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
        $description = 'Veja no detalhe cada uma das experiências profissionais que eu tive, minhas atribuições e o período que trabalhei em cada lugar.';
        $title = 'Experiência Profissional';
        $this->seo();
        $this->seo()->setTitle($title);
        $this->seo()->setDescription($description);
        $this->seo()->twitter()->setTitle($title);
        $this->seo()->twitter()->setDescription($description);
        $this->seo()->opengraph()->setTitle($title);
        $this->seo()->opengraph()->setDescription($description);
        $this->seo()->jsonLd()->setTitle($title);
        $this->seo()->jsonLd()->setDescription($description);

        $xps = Professional::orderBy('endDate', 'desc')->get();

        return view('resume.detailed.professional', compact(('xps')));
    }

    public function education()
    {
        $description = 'Entre aqui e compreenda melhor cada uma das formações que eu já tive, períodos, instituições e lições tiradas.';
        $title = 'Histórico Acadêmico';
        $this->seo();
        $this->seo()->setTitle($title);
        $this->seo()->setDescription($description);
        $this->seo()->twitter()->setTitle($title);
        $this->seo()->twitter()->setDescription($description);
        $this->seo()->opengraph()->setTitle($title);
        $this->seo()->opengraph()->setDescription($description);
        $this->seo()->jsonLd()->setTitle($title);
        $this->seo()->jsonLd()->setDescription($description);

        $educations = Education::orderBy('endDate', 'desc')->get();

        return view('resume.detailed.education', compact(('educations')));
    }

    public function volunteer()
    {
        $description = 'Para entender melhor o ser humano, é preciso compreender como são as relações humanas. Trabalho voluntário é sobre servir, mas também é sobre desenvolver-se enquanto humano.';
        $title = 'Trabalhos Voluntários';
        $this->seo();
        $this->seo()->setTitle($title);
        $this->seo()->setDescription($description);
        $this->seo()->twitter()->setTitle($title);
        $this->seo()->twitter()->setDescription($description);
        $this->seo()->opengraph()->setTitle($title);
        $this->seo()->opengraph()->setDescription($description);
        $this->seo()->jsonLd()->setTitle($title);
        $this->seo()->jsonLd()->setDescription($description);

        $volunteers = Volunteer::orderby('endDate', 'desc')->get();

        return view('resume.detailed.volunteer', compact(('volunteers')));
    }

    public function certifications()
    {
        $description = 'Nesta página, você verá algumas informações relativas a certificações obtidas fora do ambiente acadêmico, que validam um determinado conhecimento adquirido.';
        $title = 'Certificações e Reconhecimentos';
        $this->seo();
        $this->seo()->setTitle($title);
        $this->seo()->setDescription($description);
        $this->seo()->twitter()->setTitle($title);
        $this->seo()->twitter()->setDescription($description);
        $this->seo()->opengraph()->setTitle($title);
        $this->seo()->opengraph()->setDescription($description);
        $this->seo()->jsonLd()->setTitle($title);
        $this->seo()->jsonLd()->setDescription($description);

        $certifications = Certifications::orderby('endDate', 'desc')->get();

        return view('resume.detailed.certifications', compact(('certifications')));
    }

    public function courses()
    {
        $description = 'O conhecimento é algo maravilhoso, e adquirir esse conhecimento é melhor ainda. Aqui, você tem acesso à lista de cursos e bootcamps, junto do aprendizado obtido.';
        $title = 'Cursos e Bootcamps';
        $this->seo();
        $this->seo()->setTitle($title);
        $this->seo()->setDescription($description);
        $this->seo()->twitter()->setTitle($title);
        $this->seo()->twitter()->setDescription($description);
        $this->seo()->opengraph()->setTitle($title);
        $this->seo()->opengraph()->setDescription($description);
        $this->seo()->jsonLd()->setTitle($title);
        $this->seo()->jsonLd()->setDescription($description);

        $courses = Courses::orderBy('endDate', 'desc')->get();

        return view('resume.detailed.courses', compact(('courses')));
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
