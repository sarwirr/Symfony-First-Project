<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;

class TodoController extends AbstractController
{
    #[Route('/todo', name: 'app_todo')]
    public function index(request $request): Response
    {

        $session = $request ->getSession();
        //afficher notre tableau de todo
        // si jai mon tableau de todo dans ma session 

    if (!$session->has('todo')) {
        $todo =
        [
             'achat' => 'acheter cle usb',
             'cours' => 'finaliser mon cours',
             'correction'=> 'corriger ses exams'
        ];
        $session->set('todo',$todo);
    }
        //je fait que lafficher
        //sinon jinitialise puis jaffiche


        return $this->render('todo/index.html.twig');
    }

    #[Route('/todo/{name}/{content}', name: 'todo.add')]
    public function addtodo (request $request, $same, $content)
    {
        $session= $request->getSession();
        //verifier si on a un tableau
        if($session->has('todo')){
            
        }
        //si oui
            //verifier si on a un todo avec le meme nom
                //si oui afficher erreur
                //sinon 
                    //ajoute +message de success



        //sinon 
            //afficher une erreur et on redirect vers le controlleur index
    }


}