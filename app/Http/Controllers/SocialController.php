<?php

namespace App\Http\Controllers;

use Artesaos\SEOTools\Traits\SEOTools as SEOToolsTrait;

class SocialController extends Controller
{
    use SEOToolsTrait;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $description = 'Manter um contato social não é difícil, basta estar na rede certa, na hora certa. Me chama em uma das redes e vamos conversar ;-D';
        $title = 'Perfis e links oficiais';
        $this->seo();
        $this->seo()->setTitle($title);
        $this->seo()->setDescription($description);
        $this->seo()->twitter()->setTitle($title);
        $this->seo()->twitter()->setDescription($description);
        $this->seo()->opengraph()->setTitle($title);
        $this->seo()->opengraph()->setDescription($description);
        $this->seo()->jsonLd()->setTitle($title);
        $this->seo()->jsonLd()->setDescription($description);
        return view('social.index');
    }

    public function youtube() {
        $description = 'Vem ver alguns vídeos e se desenvolver junto comigo, através do meu canal do YouTube.';
        $title = 'YouTube';
        $this->seo();
        $this->seo()->setTitle($title);
        $this->seo()->setDescription($description);
        $this->seo()->twitter()->setTitle($title);
        $this->seo()->twitter()->setDescription($description);
        $this->seo()->opengraph()->setTitle($title);
        $this->seo()->opengraph()->setDescription($description);
        $this->seo()->jsonLd()->setTitle($title);
        $this->seo()->jsonLd()->setDescription($description);
        return view('social.youtube');
    }

    public function facebook()
    {
        return redirect()->route('social.index', null, 301);
    }

    public function blog()
    {
        $description = 'Conteúdo da comunidade e para a comunidade: vem ler uns artigos no meu blog e se informar ainda mais.';
        $title = 'Blog';
        $this->seo();
        $this->seo()->setTitle($title);
        $this->seo()->setDescription($description);
        $this->seo()->twitter()->setTitle($title);
        $this->seo()->twitter()->setDescription($description);
        $this->seo()->opengraph()->setTitle($title);
        $this->seo()->opengraph()->setDescription($description);
        $this->seo()->jsonLd()->setTitle($title);
        $this->seo()->jsonLd()->setDescription($description);
        return view('social.blog');
    }

    public function twitter()
    {
        $description = 'Bora bater um papo maroto, criar umas threads e conversar em 140 caracteres (ou melhor ainda - 280)?';
        $title = 'Twitter';
        $this->seo();
        $this->seo()->setTitle($title);
        $this->seo()->setDescription($description);
        $this->seo()->twitter()->setTitle($title);
        $this->seo()->twitter()->setDescription($description);
        $this->seo()->opengraph()->setTitle($title);
        $this->seo()->opengraph()->setDescription($description);
        $this->seo()->jsonLd()->setTitle($title);
        $this->seo()->jsonLd()->setDescription($description);
        return view('social.twitter');
    }

    public function linkedin()
    {
        $description = 'Informações ainda mais detalhadas do que as que estão aqui no site sobre minha trajetória profissional... Encontre isso no LinkedIn.';
        $title = 'LinkedIn';
        $this->seo();
        $this->seo()->setTitle($title);
        $this->seo()->setDescription($description);
        $this->seo()->twitter()->setTitle($title);
        $this->seo()->twitter()->setDescription($description);
        $this->seo()->opengraph()->setTitle($title);
        $this->seo()->opengraph()->setDescription($description);
        $this->seo()->jsonLd()->setTitle($title);
        $this->seo()->jsonLd()->setDescription($description);
        return view('social.linkedin');
    }

    public function instagram()
    {
        $description = 'Fotos conceituais de pratos de comida, paisagens da praia, e vivendo uma vida feliz e sorridente. Tudo isso você encontra no Instagram.';
        $title = 'Instagram';
        $this->seo();
        $this->seo()->setTitle($title);
        $this->seo()->setDescription($description);
        $this->seo()->twitter()->setTitle($title);
        $this->seo()->twitter()->setDescription($description);
        $this->seo()->opengraph()->setTitle($title);
        $this->seo()->opengraph()->setDescription($description);
        $this->seo()->jsonLd()->setTitle($title);
        $this->seo()->jsonLd()->setDescription($description);
        return view('social.instagram');
    }

    public function wordpress()
    {
        $description = 'Para um conteúdo mais intimista, falando dos meus posicionamentos políticos e um conteúdo religioso, você pode acessar meu blog no WordPress.';
        $title = 'WordPress';
        $this->seo();
        $this->seo()->setTitle($title);
        $this->seo()->setDescription($description);
        $this->seo()->twitter()->setTitle($title);
        $this->seo()->twitter()->setDescription($description);
        $this->seo()->opengraph()->setTitle($title);
        $this->seo()->opengraph()->setDescription($description);
        $this->seo()->jsonLd()->setTitle($title);
        $this->seo()->jsonLd()->setDescription($description);
        return view('social.wordpress');
    }

    public function github()
    {
        $description = 'Todas as contribuições, pull requests, issues e commits feitos na vida (incluindo a desse site). A 2ª casa de todo programador, o GitHub.';
        $title = 'GitHub';
        $this->seo();
        $this->seo()->setTitle($title);
        $this->seo()->setDescription($description);
        $this->seo()->twitter()->setTitle($title);
        $this->seo()->twitter()->setDescription($description);
        $this->seo()->opengraph()->setTitle($title);
        $this->seo()->opengraph()->setDescription($description);
        $this->seo()->jsonLd()->setTitle($title);
        $this->seo()->jsonLd()->setDescription($description);
        return view('social.github');
    }

    public function pinterest()
    {
        $description = 'Ideias de tatuagens, frases reflexivas, dicas de gestão de empresas e mídias sociais. Quem criou o Pinterest merece um prêmio.';
        $title = 'Pinterest';
        $this->seo();
        $this->seo()->setTitle($title);
        $this->seo()->setDescription($description);
        $this->seo()->twitter()->setTitle($title);
        $this->seo()->twitter()->setDescription($description);
        $this->seo()->opengraph()->setTitle($title);
        $this->seo()->opengraph()->setDescription($description);
        $this->seo()->jsonLd()->setTitle($title);
        $this->seo()->jsonLd()->setDescription($description);
        return view('social.pinterest');
    }
    public function telegram()
    {
        $description = 'O melhor app de mensagens já criado (na minha opinião) tem uma conta com um perfil meu. Entre já no meu Telegram.';
        $title = 'Telegram';
        $this->seo();
        $this->seo()->setTitle($title);
        $this->seo()->setDescription($description);
        $this->seo()->twitter()->setTitle($title);
        $this->seo()->twitter()->setDescription($description);
        $this->seo()->opengraph()->setTitle($title);
        $this->seo()->opengraph()->setDescription($description);
        $this->seo()->jsonLd()->setTitle($title);
        $this->seo()->jsonLd()->setDescription($description);
        return view('social.telegram');
    }
    public function stackoverflow()
    {
        $description = 'A casa de todo programador em formação, deus de todas as dúvidas e respostas dos devs. Nós te adoramos Stackoverflow <3 <3';
        $title = 'Stackoverflow';
        $this->seo();
        $this->seo()->setTitle($title);
        $this->seo()->setDescription($description);
        $this->seo()->twitter()->setTitle($title);
        $this->seo()->twitter()->setDescription($description);
        $this->seo()->opengraph()->setTitle($title);
        $this->seo()->opengraph()->setDescription($description);
        $this->seo()->jsonLd()->setTitle($title);
        $this->seo()->jsonLd()->setDescription($description);
        return view('social.stackoverflow');
    }
    public function whatsapp()
    {
        $description = 'Com uma conversa em que não vai faltar figurinhas, memes e piadas ruins, me chama no zap!';
        $title = 'WhatsApp';
        $this->seo();
        $this->seo()->setTitle($title);
        $this->seo()->setDescription($description);
        $this->seo()->twitter()->setTitle($title);
        $this->seo()->twitter()->setDescription($description);
        $this->seo()->opengraph()->setTitle($title);
        $this->seo()->opengraph()->setDescription($description);
        $this->seo()->jsonLd()->setTitle($title);
        $this->seo()->jsonLd()->setDescription($description);
        return view('social.whatsapp');
    }
}
