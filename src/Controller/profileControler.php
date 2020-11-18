<?php


namespace App\Controller;



use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Symfony\Component\Routing\Annotation\Route;

class profileControler extends  AbstractController
{

    /**
     * @Route("/skills", name="profile_skills")
     */

    public function ProfileSkills(){
        $skills = [ "Incognito", "Aimable", "Gentlemen", "Beau", "Fort", "Drole", "Intelligent"];

        Return $this->render('profile.html.twig',[
            "skills" => $skills
        ]);
    }


}