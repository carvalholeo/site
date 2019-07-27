<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('contact.index');
    }


    public function send(Request $request)
    {
        $recaptcha = self::validateRecaptcha($request->input('recaptcha_response'));

        
        if ($recaptcha->score >= 0.5) {
            
        } else {
            // Not verified - show form error
        }
        
    }

    
    public function validateRecaptcha($response)
    {
        $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
        $recaptcha_secret = getenv('GOOGLE_RECAPTCHA_SECRET_KEY');
        $recaptcha_response = $response;

        $recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response);
        $recaptcha = json_decode($recaptcha);

        return $recaptcha;
    }
    
}
