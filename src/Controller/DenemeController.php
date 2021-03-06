<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;

class DenemeController extends AbstractController
{
    /**
     * @Route("/deneme", name="deneme")
     */
    public function index(): Response
    {
		$entityManager = $this->getDoctrine()->getManager();
		
		$user = new User();
		$user->setEmail('ramazan2@rt.com');
		$user->setPassword("1212");
		$entityManager->persist($user);
		$entityManager->flush();
		echo $user->getId();
        return $this->render('deneme/index.html.twig', [
            'controller_name' => 'DenemeController',
        ]);
    }
}
