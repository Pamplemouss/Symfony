<?php
namespace App\Service;

use Symfony\Contracts\HttpClient\HttpClientInterface;

interface CatFactInterface
{ 
    public function getFact();
}