<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

/**
 * @property string hash
 */
class Url extends Model
{
    protected $fillable = [
        'url',
        'hash',
        'lifetime'
    ];

    /**
     * {@inheritDoc}
     */
    protected static function boot()
    {
        parent::boot();

        self::creating(function ($url) {
            $url->hash = app('urlshortener')->shorten($url->url);
        });
    }

    /**
     * @return string
     */
    public function getShortenAttribute(): string
    {
        return url('') . '/' . $this->hash;
    }

    public function isExpired(): bool
    {
        return $this->lifetime
            && $this->created_at
                ->addSeconds($this->lifetime)
                ->lt(now());
    }
}
