<?php


namespace App\Services\UrlShortener;

use App\Exceptions\InvalidUrlShortenerDriverType;

class DriverFactory
{
    public static function make()
    {
        switch (config('urlshortener.driver')) {
            case 'md5':
                $driver = new Md5Driver();
                break;

            default:
                throw new InvalidUrlShortenerDriverType('Wrong type of the url shortener.');
        }

        return $driver;
    }
}
