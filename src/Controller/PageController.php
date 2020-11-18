<?php
Namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PageController extends  AbstractController
{

    /**
     * @Route ("/", name="home")
     */
public function acceuil(){
    $response = new Response('Bienvenue a l\'acceuil');
    return $response;
}


    /**
     * @Route("/poker", name="page_poker")
     */
    public function age(Request $request){                   // request est associé utilisé pour récupéré info
        $age = $request->query->get('age');               // soit en équivalent $GET, $POST, $COOKIES ...
        if($age>=18){
            echo 'tes bien majeur c\'est bon';
        }else{                                                  //si age supérieur ou égal a 18 = tu peux entrer
            echo 'Tu peux pas encore y acceder t\'es mineur';   //si age strict inf à 18 = pas entrer
        }
        die();
    }

    /**
     * @Route("/koala", name="page_name")                               // nouvelle route koala
     */
    public function recupere(Request $request){
        $firstname =  $request->query->get('prenom');               // recupere prenom
        $lastname =  $request->query->get('nom');                   // recupere nom

        $response = new Response( "<p> Bonjour $firstname $lastname </p> ");

            // affiche Bonjour nom prenom dans une balises p d'html

            return $response;
    }

    /**
     * @Route("/table/{id}/{name}/{age}", name="page_table")               */
    public function Associe($id, $name, $age){

       $articles = [
         '1'  => 'Article 1',
         '2'  => 'Article 2',
         '3'  => 'Article 3',
         '4'  => 'Article 4',
         '5'  => 'Article 5',
         '6'  => 'Article 6'
        ];

        //  $response = new Response($table[$id]);
        //  return $response;

        $article = $articles[$id];

        return $this->render('article.html.twig',[        //permet l communication entre les deux fichier donc melange html -> php
            'article'=> $article,                           //les données que l'on envoie a twig entre{{ }}
            'name' => $name,
            'age' => $age,
        ]);
    }

    /**
     * @Route("/form", name="page_form")
     */
    public function form(){
        $isFormFilled = true;

    /**
     * si le formulaire n'a pas été rempli : envoi message d'erreur avec la technique $response, ne pas oublier le "return"
     */
    if (!$isFormFilled){
        $response = new Response("Veuillez remplir le formulaire s'il vous plait.");
        return $response;
    }else{
        /**
         * si le formulaire a été rempli : redirige vers la homepage, on peut utiliser la methode redirectToRoute car on
         * au début du code "étendue" notre class à la classe "AbstractController".
         * C'est grâce au name de l'annotation qui gère la homepage que l'on peut retrouver son chemin et rediriger vers elle
         * Again : ne pas oublier le return, si on l'oubli, rien ne se passe.
         */
     return $this->render("base.html.twig");
     // render permet d'aller appeller la page twig composer d'html donc plus de mélange html/php
}
}
}