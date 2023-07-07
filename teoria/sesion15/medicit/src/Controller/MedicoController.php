<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;


use App\Entity\Medico;

class MedicoController extends AbstractController
{

    private $em;

    //Constructor
    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }


    #[Route('/medico', name: 'app_medico')]
    public function index(): Response
    {
        return $this->render('medico/index.html.twig', [
            'controller_name' => 'MedicoController',
        ]);
    }

    #[Route('/new-medico', name: 'new_medico', methods:['POST'])]
    public function new(Request $request): JsonResponse
    {
        $data = $request->toArray();
        $medico = new Medico($data['name']);

        $this->em->persist($medico);
        $this->em->flush();

        return new JsonResponse(["message"=>"exito!"]);
    }

    #[Route('/update-medico/{id}', name: 'update_medico', methods:['POST'])]
    public function update(Medico $medico, Request $request): JsonResponse
    {
        $data = $request->toArray();
        $medico->setName($data['name']);
        $this->em->flush();

        return new JsonResponse(["message"=>"medico modificado!"]);
    }

    #[Route('/remove-medico/{id}', name: 'remove_medico', methods:['DELETE'])]
    public function remove(Medico $medico): JsonResponse
    {
        $this->em->remove($medico);
        $this->em->flush();

        return new JsonResponse(["message"=>"medico eliminado!"]);
    }

    #[Route('/show-medico/{id}', name: 'show_medico', methods:['GET'])]
    public function show(Medico $medico): Response
    {
        return $this->render('medico/show.html.twig', [
            'medico' => $medico,
        ]);
    }


}
