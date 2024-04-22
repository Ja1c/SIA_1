<?php

namespace App\Traits;

use GuzzleHttp\Client;

trait ConsumesExternalService
{
    /**
     * Send a request to any service
     *
     * @param string $method HTTP method (GET, POST, PUT, DELETE, etc.)
     * @param string $requestUrl The URL to which the request is sent
     * @param array $formParams (Optional) Form parameters for the request
     * @param array $headers (Optional) Headers for the request
     * @return string Response body contents
     */
    public function performRequest($method, $requestUrl, $formParams = [], $headers = [])
    {
        // Create a new Guzzle client instance
        $client = new Client([
            'base_uri' => $this->baseUri,
        ]);

        // Perform the request
        $response = $client->request($method, $requestUrl, [
            'form_params' => $formParams,
            'headers' => $headers,
        ]);

        // Get the response body contents
        return $response->getBody()->getContents();
    }
}
