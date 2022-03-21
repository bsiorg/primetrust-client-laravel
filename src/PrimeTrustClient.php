<?php

namespace BsiOrg\PrimeTrust;

use GuzzleHttp\Client as HttpClient;

class PrimeTrustClient
{
    protected $url;
    protected $user;
    protected $pass;
    public $httpClient;
    public $timeout = 30;

    public function __construct(HttpClient $httpClient = null)
    {
        $this->url = config('primetrust.url');
        $this->user = config('primetrust.user');
        $this->pass = config('primetrust.pass');

        if ( ! is_null($httpClient)) {
            $this->$httpClient = $httpClient;
        }
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function setUrl($url): void
    {
        $this->url = $url;
    }

    public function getUser(): string
    {
        return $this->user;
    }

    public function setUser($user): void
    {
        $this->user = $user;
    }

    public function setPass($pass): void
    {
        $this->pass = $pass;
    }

    public function getTimeout(): int
    {
        return $this->timeout;
    }

    public function setTimeout(int $timeout): void
    {
        $this->timeout = $timeout;
    }

    public function accounts()
    {
    }
}
