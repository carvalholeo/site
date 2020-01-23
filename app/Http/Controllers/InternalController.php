<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use Illuminate\Support\Facades\URL;

class InternalController extends Controller
{
    public function update(Request $request)
    {
        return RepositoryUpdateController::executeUpdate();
    }

    private static function executeUpdate()
    {
        $exec = shell_exec('sudo git pull origin master 2>&1');
		echo $exec;
        if (!$exec) {
            return response('Erro interno. Não foi possível atualizar o site.', 503);
        }
        return response('Enviado com sucesso. Atualizará em breve.', 201);
    }

    public function sitemap()
    {
        $sitemap = App::make('sitemap');

        $sitemap->setCache('laravel.sitemap', 60);

        if (!$sitemap->isCached()) {
            $sitemap->add(URL::to(route('index'), [], true), '2020-01-14T17:10:00-03:00', '1.0', 'weekly');
            $sitemap->add(URL::to(route('resume.index'), [], true), '2020-01-14T17:10:00-03:00', '0.8', 'monthly');

            $sitemap->add(URL::to(route('social.index'), [], true), '2020-01-14T17:10:00-03:00', '0.5', 'yearly');
            $sitemap->add(URL::to(route('social.facebook'), [], true), '2020-01-14T17:10:00-03:00', '0.5', 'yearly');
            $sitemap->add(URL::to(route('social.youtube'), [], true), '2020-01-14T17:10:00-03:00', '0.5', 'yearly');
            $sitemap->add(URL::to(route('social.blog'), [], true), '2020-01-14T17:10:00-03:00', '0.5', 'yearly');
            $sitemap->add(URL::to(route('social.twitter'), [], true), '2020-01-14T17:10:00-03:00', '0.5', 'yearly');
            $sitemap->add(URL::to(route('social.instagram'), [], true), '2020-01-14T17:10:00-03:00', '0.5', 'yearly');
            $sitemap->add(URL::to(route('social.linkedin'), [], true), '2020-01-14T17:10:00-03:00', '0.5', 'yearly');
            $sitemap->add(URL::to(route('social.wordpress'), [], true), '2020-01-14T17:10:00-03:00', '0.5', 'yearly');
            $sitemap->add(URL::to(route('social.pinterest'), [], true), '2020-01-14T17:10:00-03:00', '0.5', 'yearly');
            $sitemap->add(URL::to(route('social.telegram'), [], true), '2020-01-14T17:10:00-03:00', '0.5', 'yearly');
            $sitemap->add(URL::to(route('social.stackoverflow'), [], true), '2020-01-14T17:10:00-03:00', '0.5', 'yearly');
            $sitemap->add(URL::to(route('social.whatsapp'), [], true), '2020-01-14T17:10:00-03:00', '0.5', 'yearly');

        }

        return $sitemap->render('xml');
    }
}
