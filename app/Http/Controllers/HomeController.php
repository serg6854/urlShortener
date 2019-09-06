<?php

namespace App\Http\Controllers;

use App\Url;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke()
    {
        $urls = Url::all();

        return view('urls.create', compact('urls'));
    }
}
