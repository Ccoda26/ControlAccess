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

    /**
     * @Route("/agent/{id}", name="agent_show")
     */

    public function Agent_show($id){

        $agentShow = [
            1 => [
                "id" => 1,
                "lastName" => "Robert",
                "firstName" => "David",
                "age" => 30,
                "published" => true
            ],
            2 => [
                "id" => 2,
                "lastName" => "Labaste",
                "firstName" => "Denis",
                "age" => 29,
                "published" => true
            ],
            3 => [
                "id" => 3,
                "lastName" => "Rozand",
                "firstName" => "Mathieu",
                "age" => 31,
                "published" => false
            ],
            4 => [
                "id" => 4,
                "lastName" => "Despert",
                "firstName" => "Yoann",
                "age" => 33,
                "published" => true
            ],
            5 => [
                "id" => 5,
                "lastName" => "Dorignac",
                "firstName" => "Loic",
                "age" => 34,
                "published" => true
            ]
        ];

        $showagent = $agentShow[$id];

        return $this->render("agentshow.html.twig",
        [
            'agentshow' => $showagent
        ]);
    }



    /**
    * @Route("/agent", name="profile_agent")
    */
    public function NameAgent(){
        $agents = [
        1 => [
            "id" => 1,
            "lastName" => "Robert",
            "firstName" => "David",
            "age" => 30,
            "published" => true
        ],
            2 => [
            "id" => 2,
            "lastName" => "Labaste",
            "firstName" => "Denis",
            "age" => 29,
            "published" => true
        ],
            3 => [
            "id" => 3,
            "lastName" => "Rozand",
            "firstName" => "Mathieu",
            "age" => 31,
            "published" => false
        ],
            4 => [
            "id" => 4,
            "lastName" => "Despert",
            "firstName" => "Yoann",
            "age" => 33,
            "published" => true
        ],
            5 => [
            "id" => 5,
            "lastName" => "Dorignac",
            "firstName" => "Loic",
            "age" => 34,
            "published" => true
        ]
        ];

        return $this->render('profile.html.twig', [
            'agents' => $agents
        ]);
    }

}