<?php
namespace App\Controller;

use App\Service\CatFactService;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class FactAPIController extends AbstractController
{
    public function __construct(private CatFactService $catFactService) {
    }

    #[Route('/v1/api/test-content')]
    public function getFact()
    {
        try {
            $fact = $this->catFactService->getFact();
        } catch (Exception $e) {
            echo 'Caught exception: ', $e->getMessage(), "\n";
            $response = new Response();
            $response->setStatusCode(500);
            return $response;
        }

        return $fact;
    }
}