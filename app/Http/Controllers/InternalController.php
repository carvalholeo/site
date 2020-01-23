<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Artisan;

class InternalController extends Controller
{
    public function updateRepository(Request $request)
    {
        return InternalController::executeUpdate();
    }

    private static function executeUpdate()
    {
        $code = 0;
        $response = '';

        try {
            $response = Artisan::call('update:repository');
            $code = 201;

        } catch (\Exception $th) {
            $response = $th->getMessage();
            $code = 503;
            
        } finally {
            Artisan::call('up');
            return response($response, $code);
        }
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
