<?php

namespace App\Http\Controllers;

use App\Url;
use Illuminate\Http\Request;

class UrlRedicectorController extends Controller
{
    public function __invoke($hash)
    {
        $url = Url::where([
            'hash' => $hash
        ])->firstOrFail();

        if ($url->isExpired()) {
            $url->delete();
            abort(404);
        }

        return redirect()->away($url->url);
    }
}
