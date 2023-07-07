<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;

use App\Entity\Paciente;

class PacienteController extends AbstractController
{

    private $em;

    //Constructor
    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    #[Route('/paciente', name: 'app_paciente')]
    public function index(): Response
    {
        return $this->render('paciente/index.html.twig', [
            'controller_name' => 'PacienteController',
        ]);
    }

    #[Route('/new-paciente', name: 'new_paciente', methods:['POST'])]
    public function new(Request $request): JsonResponse
    {
        $data = $request->toArray();
        $paciente = new Paciente($data['name']);

        $this->em->persist($paciente);
        $this->em->flush();

        return new JsonResponse(["message"=>"exito!"]);
    }
}
