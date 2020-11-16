<?php
Namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class PageController
{
    /**
     * @Route("/poker", name="page_poker")
     */
    public function age(Request $request){
        $age = $request->query->get('age');
        if($age>=18){
           echo 'majeur';
        }else{
            echo 'mineur';
        }
        die();
    }

}