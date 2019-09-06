<?php


namespace App\Services\UrlShortener;

class Md5Driver implements Driver
{
    public function shorten(string $url): string
    {
        return md5($url);
    }
}
