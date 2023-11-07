<?php
namespace App\Service;

use App\Service\CatFactInterface;
use Symfony\Component\HttpFoundation\Response;

class CatFactMock implements CatFactInterface
{    
    public function getFact()
    {
        $response = new Response();
        $response->setStatusCode(500);
        return $response;
    }
}