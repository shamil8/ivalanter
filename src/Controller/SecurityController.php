<?php


namespace App\Controller;


//use ApiPlatform\Core\Api\IriConverterInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
//use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SecurityController extends AbstractController
{
    /**
     * @Route("/login", name="app_login", methods={"POST"})
     */
    public function login() {

        return $this->json([
            'user' => $this->getUser()->getId()
        ]);
    }

    /**
     * @Route("/logout", name="app_logout")
     */
    public function logout() {

    }
}
