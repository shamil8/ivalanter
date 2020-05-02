<?php


namespace App\Controller;

use App\Entity\User;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class UserController extends AbstractController
{
    /**
     * @Route("/api/user", methods={"GET"})
     * @param Request $req
     * @return JsonResponse
     */
    public function getUserProfile(Request $req) :JsonResponse
    {
        $id = (int) $req->get('id');
        $users = $this->getDoctrine()->getRepository(User::class)->findAll();

        $name = '';

        /** @var User $user */
        foreach ($users as $user) {
            $name = $user->getName(). ' ' .$user->getLastname();
        }

        return $this->json([
            'fullName' => $name,
        ]);
    }
}
