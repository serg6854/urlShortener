<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUrlShortener;
use App\Url;
use Illuminate\Http\Request;

class UrlsController extends Controller
{
    public function store(CreateUrlShortener $request)
    {
        $url = Url::firstOrCreate($request->only(['url', 'lifetime']));

        return redirect()->route('urls.show', $url);
    }

    public function show(Url $url)
    {
        return view('urls.show', compact('url'));
    }
}
