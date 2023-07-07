<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Cita;
use App\Entity\Medico;
use App\Entity\Paciente;

class CitaController extends AbstractController
{

    private $em;

    //Constructor
    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    #[Route('/citas', name: 'all_citas')]
    public function index(): Response
    {
        $citas = $this->em->getRepository(Cita::class)->findAll();
        
        return $this->render('cita/index.html.twig', [
            'citas' => $citas,
        ]);
    }

    #[Route('/new-cita', name: 'new_cita', methods:['POST'])]
    public function new(Request $request): JsonResponse
    {
        $data = $request->toArray();
        $medico_id = $data['medico_id'];
        $medico = $this->em->getRepository(Medico::class)->find($medico_id);

        $paciente_id = $data['paciente_id'];
        $paciente = $this->em->getRepository(Paciente::class)->find($paciente_id);

        $cita = new Cita();
        $cita->setDate($data['date']);
        $cita->setMedico($medico);
        $cita->setPaciente($paciente);

        $this->em->persist($cita);
        $this->em->flush();

        return new JsonResponse(["message"=>"exito!!"]);
    }

    #[Route('/update-cita', name: 'update_cita', methods:['POST'])]
    public function update(Request $request): JsonResponse
    {
        $data = $request->toArray();
        $medico_id = $data['medico_id'];
        $medico = $this->em->getRepository(Medico::class)->find($medico_id);

        $paciente_id = $data['paciente_id'];
        $paciente = $this->em->getRepository(Paciente::class)->find($paciente_id);

        $cita_id = $data['cita_id'];
        $cita = $this->em->getRepository(Cita::class)->find($cita_id);

        $cita->setDate($data['date']);
        $cita->setMedico($medico);
        $cita->setPaciente($paciente);

        $this->em->flush();

        return new JsonResponse(["message"=>"modificación con exito!!"]);
    }

    #[Route('/show-cita/{id}', name: 'show_cita', methods:['GET'])]
    public function show(Cita $cita): Response
    {
        return $this->render('cita/show.html.twig', [
            'cita' => $cita,
        ]);
    }

    #[Route('/remove-cita/{id}', name: 'remove_cita', methods:['DELETE'])]
    public function remove(Cita $cita): JsonResponse
    {
        $this->em->remove($cita);
        $this->em->flush();

        return new JsonResponse(["message"=> "Cita borrada"]);
    }


}
