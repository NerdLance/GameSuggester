<?php

namespace App\Controller;

use App\Entity\Games;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ImportGamesController extends AbstractController
{
    #[Route('/import/games', name: 'app_import_games')]
    public function index(Request $request, ManagerRegistry $doctrine): Response
    {
        $allGames = [];

        //$game = new Games();
        $form = $this->createFormBuilder()
            ->add('submit', SubmitType::class, ['label' => 'Import Games'])
            ->getForm();


        return $this->renderForm('import_games/index.html.twig', [
            'controller_name' => 'ImportGamesController',
            'form' => $form,
        ]);
    }
}