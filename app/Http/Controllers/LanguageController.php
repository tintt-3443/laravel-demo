<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Session;
use App;

class LanguageController extends Controller
{
    public function changeLanguage(Request $request, $lang)
    {   
        App::setLocale($lang);
        Session::put('lang', $lang);
        return redirect()->back();
    }
}
