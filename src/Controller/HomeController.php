<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

use App\Data\Youtubers;

class HomeController extends AbstractController
{
    /**
     * @Route("/{selectedCode}", name="home")
     */
    public function index($selectedCode='jdmp')
    {
    	$youtubers= Youtubers::getData();

    	if (!array_key_exists($selectedCode, $youtubers)) {
    		throw $this->createNotFoundException('Youtubeur inconnu');
    	}
    	$selectedYoutuber= $youtubers[$selectedCode];

        return $this->render('home/index.html.twig', [
        	'selectedYoutuber'=>$selectedYoutuber,
        	'selectedCode'=>$selectedCode,
        	'youtubers'=>$youtubers
        ]);
    }

}
