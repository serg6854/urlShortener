<?php

namespace App\Services\UrlShortener;

class UrlShortener
{
    /**
     * @var Driver
     */
    private $driver;

    public function __construct(Driver $driver)
    {
        $this->driver = $driver;
    }

    /**
     * @param Driver $driver
     * @return $this
     */
    public function setDriver(Driver $driver)
    {
        $this->driver = $driver;

        return $this;
    }

    /**
     * @param $url
     *
     * @return string
     */
    public function shorten(string $url): string
    {
        return $this->driver->shorten($url);
    }
}
