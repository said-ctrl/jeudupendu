<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class NomDuContrôleurController extends AbstractController
{
    #[Route('/', name: 'app_main')]
    public function index(): Response
    {
        return $this->render('nom_du_contrôleur/index.html.twig', [
            'controller_name' => 'NomDuContrôleurController',
        ]);
    }
}
