<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FirstController extends AbstractController
{
    #[Route('/first', name: 'app_first')]
    public function index(): Response
    {
        return $this->render('first/index.html.twig', [
            'controller_name' => 'FirstController',
        ]);
    }

    #[Route('/first/add/{a}/{b}', name: 'add')]
    public function addition($a,$b): Response
    {
        $resultat = $a + $b;
        return $this->render('first/index.html.twig', [
            'natija' => $resultat
        ]);
    }

    #[Route('/first/cv/{nom}/{prenom}/{age}/{section}', name: 'cv')]
    public function formcv($nom,$prenom,$age,$section): Response
    {
      
        return $this->render('first/index.html.twig', [
            'prenom' =>$prenom,
            'esm'=> $nom,
            'age'=> $age,
            'section'=>$section

        ]);
    }

}