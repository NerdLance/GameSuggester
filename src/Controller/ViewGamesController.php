<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ViewGamesController extends AbstractController
{
    #[Route('/view/games', name: 'app_view_games')]
    public function index(): Response
    {
        return $this->render('view_games/index.html.twig', [
            'controller_name' => 'ViewGamesController',
        ]);
    }
}
