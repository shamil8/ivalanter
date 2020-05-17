<?php


namespace App\Controller;

use App\Entity\Organisation;
use App\Entity\User;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class UserController extends AbstractController
{
    /**
     * @Route("/user", methods={"GET"})
     * @param Request $req
     * @return JsonResponse
     */
    public function getUserProfile(Request $req) :JsonResponse
    {
        $users = $this->getDoctrine()->getRepository(User::class)->find(1)->getOrganisation()[0];

        dd($users);

        return $this->json([
            'fullName' => 'Something',
        ]);
    }
}
