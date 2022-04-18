<?php

namespace App\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


#[Route("/todo")]
class TodoController extends AbstractController
{
    #[Route('/', name: 'todo')]
    //Affichage des todo:
    public function index(Request $request): Response
    {
        $session = $request -> getSession(); //server_start equivalent
        //s'il n'existe pas, on le crée et on l'affiche
        if (!$session-> has('todos')){
            $todos =[
                'achat' => 'acheter clé USB',
                'cours' => 'Lire le cours de Symfony',
                'correction' => 'Corriger les erreurs de compilation de cet exercice',
                'Rendre' => 'Rendre les comptes Rendus',
                'Lire' => 'Lire la documentation php',
                'TD' => 'Finir le TD algèbre -_- ',
            ];
            $session -> set('todos',$todos);
            $this -> addFlash('info',"La table de todo a été initialisée !" );
        }
          //S'il existe, on l'affiche seulement
        return $this->render('todo/index.html.twig');
    }
    #[Route('/add/{name}/{content}',
        name: 'todo.add',
        defaults:['content' =>'rien'])
    ]
    public function addTodo(Request $request,$name,$content) : RedirectResponse{
        $session = $request ->getSession();
        //Vérifier si les todos existent ds la session
        if ($session ->has('todos')) {
            //si oui
        $todos = $session ->get('todos');
        if (isset($todos[$name])){
            $this -> addFlash('danger',"Le todo $name existe déjà !" );}
        else{
            $todos[$name]= $content;
            $session ->set('todos',$todos);
            $this -> addFlash('success',"Le todo $name a été ajouté avec succès !" );

        }
        }
        //sinon
        else{
            //Déclancher une erreur et redirection vers le controlleur initial (index)
            $this -> addFlash('danger',"La liste des todos n'est pas encore initialisée" );
        }
        return $this ->redirectToRoute('todo');
}
    #[Route('/update/{name}/{content}',name: 'todo.update')]
    public function updateTodo(Request $request,$name,$content): RedirectResponse{
        $session = $request ->getSession();
        //Vérifier si les todos existent ds la session
        if ($session ->has('todos')) {
            //si oui
            $todos = $session ->get('todos');
            if (!isset($todos[$name])){
                $this -> addFlash('danger',"Le todo $name n'existe pas dans la liste" );}
            else{
                $todos[$name]= $content;
                $session ->set('todos',$todos);
                $this -> addFlash('success',"Le todo $name a été modifié avec succès !" );

            }
        }
        //sinon
        else{
            //Déclancher une erreur et redirection vers le controlleur initial (index)
            $this -> addFlash('danger',"La liste des todos n'est pas encore initialisée" );
        }
        return $this ->redirectToRoute('todo');
    }
    #[Route('/delete/{name}',name: 'todo.delete')]
    public function deleteTodo(Request $request,$name): RedirectResponse{
        $session = $request ->getSession();
        //Vérifier si les todos existent ds la session
        if ($session ->has('todos')) {
            //si oui
            $todos = $session ->get('todos');
            if (!isset($todos[$name])){
                $this -> addFlash('danger',"Le todo $name n'existe pas dans la liste" );}
            else{
                unset($todos[$name]);
                $session ->set('todos',$todos);
                $this -> addFlash('success',"Le todo $name a été supprimé avec succès !" );

            }
        }
        //sinon
        else{
            //Déclancher une erreur et redirection vers le controlleur initial (index)
            $this -> addFlash('danger',"La liste des todos n'est pas encore initialisée" );
        }
        return $this ->redirectToRoute('todo');
    }
    #[Route('/reset',name: 'todo.reset')]
    public function resetTodo(Request $request): RedirectResponse{
        $session = $request ->getSession();
        $session -> remove('todos');
        return $this ->redirectToRoute('todo');
    }
}
