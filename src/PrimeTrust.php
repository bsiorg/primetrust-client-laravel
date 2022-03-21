<?php

namespace BsiOrg\PrimeTrust;

use BsiOrg\PrimeTrust\Services\PrimeTrustService;
use GuzzleHttp\Client;

class PrimeTrust
{
    use PrimeTrustService;

    protected $url;
    protected $user;
    protected $pass;
    protected $client;
    protected $timeout;
    protected $prefix = 'proxy/v2';

    public function __construct()
    {
        $this->url = config('primetrust.url');
        $this->user = config('primetrust.auth.user');
        $this->pass = config('primetrust.auth.pass');
        $this->timeout = config('primetrust.options.timeout');
        $this->auth();
        $this->setClient();
    }

    protected function setClient(): void
    {
        $this->client = new Client([
            'timeout'     => $this->timeout,
            'http_errors' => false,
            'headers'     => [
                'Accept'        => 'application/json',
                'Content-Type'  => 'application/json',
                'Authorization' => "Bearer {$this->getToken()}",
            ],
        ]);
    }

    public function auth($endpoint = '/jwt'): string
    {
        if (cache()->has('primetrust_token')) {
            return $this->getToken();
        }

        $response = $this->request(
            'POST',
            sprintf('%s%s', $this->url, $endpoint),
            [
                'scopes'   => ['hei.primetrust'],
                'user'     => $this->user,
                'password' => $this->pass,
            ]
        );

        $token = $response['token'];
        cache()->put('primetrust_token', $token, 3600); // 1 hour

        return $token;
    }

    public function getToken()
    {
        return cache()->get('primetrust_token');
    }

    public function info($endpoint = '/info')
    {
        return $this->request(
            'GET',
            sprintf('%s%s', $this->url, $endpoint)
        );
    }
}
