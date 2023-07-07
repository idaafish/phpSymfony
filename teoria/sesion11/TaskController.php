<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Serializer\SerializerInterface;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Task,
    App\Entity\Admin,
    App\Entity\User,
    App\Entity\Category;

class TaskController extends AbstractController
{

    private $em;

    //Constructor
    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }
    #[Route('tasks', name: 'all_tasks')]
    public function index( SerializerInterface $serializer): Response
    {
        $tasks=$this->em->getRepository(Tarea::class)->findAll();
        $jsonData = $serializer->serialize($tasks, 'json');

        return new JsonResponse($jsonData, 200, [], true);
    }

    #[Route('/new-task', name: 'create_task', methods: ['POST'])]
    public function new(Request $request): Response
    {
            //otra forma de acceder a los datos de la petición
            // $data = $request->getContent();
            // $resultadoT = json_decode($data,true);

            $data = $request->toArray();
            $admin = $this->em->getRepository(Admin::class)->find($data['admin_id']);
           

            $task = new Task();
            $task->setTitle($data['title']);
            $task->setDescription($data['description']);
            $task->setAdmin($admin);
            foreach ($data['categories'] as $category_id) {
                $category = $this->em->getRepository(Category::class)->find($category_id);
                $task->addCategory($category);
            }
            
       
            $this->em->persist($task);
            $this->em->flush();
               
            return new JsonResponse(['message'=>'success']);

    }

    #[Route('/show-task/{id}', name: 'show_task', methods:['GET'])]
    public function show(Task $task): Response
    {
        // var_dump($task);
        // return new Response('MostrResponseada la task con id '.$task->getId());
        return new JsonResponse(['title'=>$task->getTitle(),'descripcion'=>$task->getDescription()]);
        
    }

    #[Route('/other-show-task', name: 'other_show_task', methods:['GET'])]
    public function otherShow(Request $request): Response
    {
        $id = $request->query->get('id');
        $task=$this->em->getRepository(Task::class)->find($id);
        $data =[
            "title"=>$task->getTitle(),
            "description"=>$task->getDescription()
        ];

        return new jsonResponse($data);
    }

    #[Route('/delete-task/{id}', name:'delete_task')]
    public function delete(Task $task): Response
    {
        $this->em->remove($task);
        $this->em->flush();

        //otra forma de hacerlo
        // $task=$this->em->getRepository(Task::class)->find($id);
        // $this->em->remove($task);
        // $this->em->flush();
        return new Response('borrada la tarea correctamente');
    }

    #[Route('/update-task/{id}', name:'update_task', methods:['POST'])]
    public function update(Task $task, Request $request): Response
    {
        $data = $request->toArray();
        $task->setTitle($data['title']);
        $task->setDescription($data['description']);
        $task->setDescription($data['status']);

        $this->em->flush();
        return new jsonResponse(['message'=>'success']);
    }

    #[Route('/asign-user', name:'asign_task', methods:['POST'])]
    public function asign (Request $request,SerializerInterface $serializer): Response
    {
        $data = $request->toArray();
        $task_id = $data['task_id'];
        $task = $this->em->getRepository(Task::class)->find($task_id);

        $user_id = $data['user_id'];
        $user = $this->em->getRepository(User::class)->find($user_id);
        
        //$user-> addTask($task);
        $task-> setUser($user);

        $this->em->flush();
        return new jsonResponse(["message"=>"success"]);
    }
}
