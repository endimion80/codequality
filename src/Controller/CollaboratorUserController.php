<?php

namespace App\Controller;

use App\Service\Backend\CollaboratorUserService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class CollaboratorUserController extends AbstractController
{
    /**
     * Cambia la contraseña de un CollaboratorUser
     * @author Antonio Romero <antonio.romero@kosaas.com>
     * 
     * @Route("/change_password", name="change_password")
     * 
     * @param mixed $Request    Campos de las contraseñas más el token
     * @return $response
     */
    public function changePasswordAction(Request $request, CollaboratorUserService $collaboratorUserService)
    {
        $password1 = $request->get('password');
        $password2 = $request->get('password2');
        $recovery_token = $request->get('recovery_token');
        $response = $collaboratorUserService->updateCollaboratorUserPassword($password1, $password2, $recovery_token);

        return new JsonResponse($response);
    }
    
}
