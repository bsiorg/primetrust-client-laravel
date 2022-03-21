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
    protected $timeout;

    public $resource;

    public function __construct()
    {
        $this->url = config('primetrust.url');
        $this->user = config('primetrust.user');
        $this->pass = config('primetrust.pass');
        $this->timeout = config('primetrust.options.timeout');
        $this->setClient();
        $this->auth();
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

    protected function setClient(): void
    {
        $this->client = new Client([
            'timeout'     => $this->timeout,
            'http_errors' => false,
            'headers'     => [
                'Accept'       => 'application/json',
                'Content-Type' => 'application/json',
            ],
        ]);
    }

    public function auth($endpoint = '/jwt')
    {
        $response = $this->request(
            'POST',
            sprintf("%s%s", $this->url, $endpoint),
            [
                'scopes'   => ['hei.primetrust'],
                'user'     => $this->user,
                'password' => $this->pass
            ]
        );

        dd($response);
    }

    public function info($endpoint = '/info')
    {
        return $this->request(
            'GET',
            sprintf("%s%s", $this->url, $endpoint)
        );
    }
}
