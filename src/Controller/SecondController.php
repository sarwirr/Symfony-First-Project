<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SecondController extends AbstractController
{
     #[Route('/second', name: 'app_second')]
     public function index(): Response
     {

         //chercher au niveau de la base les users
        
         return $this->render('second/index.html.twig', [
             'controller_name' => 'SecondController',
             'name'=> 'sarra',
             'surname'=> 'sarwir'
         ]);
     }


    #[Route('/sayhello', name: 'say.hello')]
    public function sayHello(): Response
    {
        $rand=rand(0,10);

         echo $rand;
        
         if ($rand % 2 == 0)
            {
              return $this->redirectToRoute('app_second'); }
        
       // chercher au niveau de la base les users
        
        return $this->forward('App\Controller\SecondController::sayHello');
    }




    #[Route('/sayhello/{name}', name: 'say.hello')]
    public function sayHelloname(request $resquest ,$name): Response
    {
       return $this->render('second/index.html.twig',[
            'name'=> $name
        ]);;
    }
}