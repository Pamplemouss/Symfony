<?php
namespace App\Service;

use Symfony\Component\HttpFoundation\Response;

class MockInterface
{
    public function __construct() {
    }
    
    public function getFact()
    {
        $response = new Response();
        $response->setStatusCode(500);
        return $response;
    }
}