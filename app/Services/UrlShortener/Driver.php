<?php

namespace App\Services\UrlShortener;

interface Driver
{
    public function shorten(string $url): string;
}
