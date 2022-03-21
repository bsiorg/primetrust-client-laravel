<?php

namespace BsiOrg\PrimeTrust;

use BsiOrg\PrimeTrust\Services\HttpClientService;
use BsiOrg\PrimeTrust\Services\PrimeTrustService;
use GuzzleHttp\Client;

class PrimeTrust
{
    use HttpClientService;
    use PrimeTrustService;

    protected $url;
    protected $user;
    protected $pass;
    protected $client;
    protected $timeout = 30;

    public $resource;

    public function __construct()
    {
        $this->url = config('primetrust.url');
        $this->user = config('primetrust.user');
        $this->pass = config('primetrust.pass');
        $this->setClient();
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
        $this->setClient();
    }

    protected function setClient(): void
    {
        $this->client = new Client([
            'base_uri'    => $this->url,
            'timeout'     => $this->timeout,
            'http_errors' => false,
            'headers'     => [
                'Accept'       => 'application/json',
                'Content-Type' => 'application/json',
            ],
        ]);
    }
}
