<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Contracts\HttpClient\HttpClientInterface;

// class ProxyController extends AbstractController



// {
//     #[Route('/proxy', name: 'app_proxy')]
//     public function index(): Response
//     {
//         return $this->render('proxy/index.html.twig', [
//             'controller_name' => 'ProxyController',
//         ]);
//     }
// }

class ProxyController extends AbstractController
{
    private $httpClient;

    public function __construct(HttpClientInterface $httpClient)
    {
        $this->httpClient = $httpClient;
    }


    #[Route('/proxy/{path}', name: 'app_proxy', requirements: ['path' => '.+'], methods: ['GET', 'POST', 'OPTIONS'])]
    public function proxy(Request $request, $path): Response
    {

        $authentication = new \Http\Message\Authentication\Bearer('CnPz5ovm0Edk047z65SzUYLdfQhOiSnaqdKXSWkLO0Yz9_Ysi-er6HoBTGplAiJ5');

        $genius = new \Genius\Genius($authentication);
        $upvoteAnnotation = $genius->getAnnotationsResource();
        dd($upvoteAnnotation);

        // $url = 'https://api.genius.com/' . $path;

        // $options = [
        //     'headers' => [
        //         'Authorization' => 'Bearer CnPz5ovm0Edk047z65SzUYLdfQhOiSnaqdKXSWkLO0Yz9_Ysi-er6HoBTGplAiJ5', // Remplace par ton token
        //         'Content-Type' => 'application/json',
        //         'Origin' => $request->headers->get('Origin'),
        //         'Accept' => 'application/json',
        //     ],
        //     'query' => $request->query->all(),
        // ];

        // $response = $this->httpClient->request(
        //     $request->getMethod(),
        //     $url,
        //     $options
        // );

        // return new Response(
        //     $response->getContent(),
        //     $response->getStatusCode(),
        //     ['Content-Type' => $response->getHeaders(false)['content-type'][0] ?? 'application/json']
        // );
    }
}
