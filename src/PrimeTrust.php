<?php

namespace BsiOrg\PrimeTrust;

use GuzzleHttp\Client;
use BsiOrg\PrimeTrust\Services\HttpClientService;
use BsiOrg\PrimeTrust\Services\PrimeTrustService;

class PrimeTrust
{
    use HttpClientService,
        PrimeTrustService;

    protected $url;
    protected $user;
    protected $pass;
    public $client;
    public $timeout = 30;

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
            'base_uri' => $this->url,
            'timeout'  => $this->timeout
        ]);
    }
}
