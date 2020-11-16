<?php
Namespace App\Controller;


use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PageController
{
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

        $response = new Response( '<p> Bonjour ' . $firstname . ' ' . $lastname . ' </p> ');

            // affiche Bonjour nom prenom dans une balises p d'html

            return $response;
    }
}