<?php

namespace BsiOrg\PrimeTrust\Services;

use Exception;
use Psr\Http\Message\ResponseInterface;
use BsiOrg\PrimeTrust\Exceptions\TimeoutException;
use BsiOrg\PrimeTrust\Exceptions\NotFoundException;
use BsiOrg\PrimeTrust\Exceptions\ValidationException;
use BsiOrg\PrimeTrust\Exceptions\FailedActionException;

trait HttpClientService
{
    public function get($uri)
    {
        return $this->request('GET', $uri);
    }

    public function post($uri, array $payload = [])
    {
        return $this->request('POST', $uri, $payload);
    }

    public function put($uri, array $payload = [])
    {
        return $this->request('PUT', $uri, $payload);
    }

    public function delete($uri, array $payload = [])
    {
        return $this->request('DELETE', $uri, $payload);
    }

    protected function request($verb, $uri, array $payload = [])
    {
        if (isset($payload['json'])) {
            $payload = ['json' => $payload['json']];
        } else {
            $payload = empty($payload) ? [] : ['form_params' => $payload];
        }

        $response = $this->client->request($verb, $uri, $payload);

        $statusCode = $response->getStatusCode();

        if ($statusCode < 200 || $statusCode > 299) {
            return $this->handleRequestError($response);
        }

        $responseBody = (string) $response->getBody();

        return json_decode($responseBody, true) ?: $responseBody;
    }

    protected function handleRequestError(ResponseInterface $response)
    {
        if ($response->getStatusCode() == 422) {
            throw new ValidationException(json_decode((string) $response->getBody(),
                true));
        }

        if ($response->getStatusCode() == 404) {
            throw new NotFoundException();
        }

        if ($response->getStatusCode() == 400) {
            throw new FailedActionException((string) $response->getBody());
        }

        throw new Exception((string) $response->getBody());
    }

    public function retry($timeout, $callback, $sleep = 5)
    {
        $start = time();

        beginning:

        if ($output = $callback()) {
            return $output;
        }

        if (time() - $start < $timeout) {
            sleep($sleep);

            goto beginning;
        }

        throw new TimeoutException($output);
    }
}
