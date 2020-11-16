<?php
Namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
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

}