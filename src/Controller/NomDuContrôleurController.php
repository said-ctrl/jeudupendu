<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

use function GuzzleHttp\json_decode;

class NomDuContrôleurController extends AbstractController
{
    #[Route('/', name: 'app_main')]
    public function index(): Response
    {

        $authentication = new \Http\Message\Authentication\Bearer('CnPz5ovm0Edk047z65SzUYLdfQhOiSnaqdKXSWkLO0Yz9_Ysi-er6HoBTGplAiJ5');         

        $genius = new \Genius\Genius($authentication);
        $upvoteAnnotation = $genius->getAnnotationsResource()->get(11852249);
        dd($upvoteAnnotation);

       


        return $this->render('nom_du_contrôleur/index.html.twig', [
            'controller_name' => 'NomDuContrôleurController',
        ]);
    }
}
