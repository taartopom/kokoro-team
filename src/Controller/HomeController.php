<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

use App\Data\Youtubers;

class HomeController extends AbstractController
{
    /**
     * @Route("/{youtuberName}", name="home")
     */
    public function index($youtuberName='jdmp')
    {
    	$youtubers= Youtubers::getData();
    	dump($youtubers);
    	if (!array_key_exists($youtuberName, $youtubers)) {
    		throw $this->createNotFoundException('Youtubeur inconnu');
    	}
    	$youtuber= $youtubers[$youtuberName];
    	dump($youtuber);exit;
        return $this->render('home/index.html.twig');
    }

}
