<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class BurgerController extends AbstractController
{
    #[Route('/burger', name: 'burger')]
    public function list(): Response
    {
        return $this->render('burger/index.html.twig', [
            'controller_name' => 'BurgerController',
        ]);
    }

    #[Route('/burger/{id}', name: 'burger_id')]
    public function show($id): Response
    {
        $burgers = [
            "1" => "Classic Burger",
            "2" => "Friday Burger",
        ];
    
        if (!array_key_exists($id, $burgers)) {
            throw $this->createNotFoundException('Burger non trouvé');
        }
    
        return $this->render('burger/burger_show.html.twig', [
            'controller_name' => 'BurgerController',
            'id' => $burgers["$id"],
        ]);
    }
    
}
