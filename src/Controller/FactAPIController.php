<?php
namespace App\Controller;

use App\Service\MockInterface;
use App\Service\CatFactInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class FactAPIController extends AbstractController
{
    public function __construct(private CatFactInterface $interface) {
    }
    // TODO service / gérer erreur
    #[Route('/v1/api/test-content')]
    public function getFact()
    {
        return $this->interface->getFact();
    }
}