<?php
namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class CatFactService
{
    public function __construct(private HttpClientInterface $client) {
    }
    
    public function getFact()
    {
        $response = $this->client->request(
            'GET',
            'https://catfact.ninja/fact'
        );

        if ($response->getStatusCode() >= 400)
        {
            throw new Exception('Catfact API request error');
        }

        $content = $response->toArray();

        $data = [
            'fact' => $content["fact"],
            'length' => $content["length"]
        ];

        return new JsonResponse($data);
    }
}