<?php
// src/Controller/TaskController.php
namespace App\Controller;

use App\Entity\Task;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class TaskController extends AbstractController
{
    /**
     * @Route("/task", name="task")
     */
    public function task(Request $request): Response
{
// creates a task object and initializes some data for this example
$task = new Task();
//$task->setTask('Write a blog post');
//$task->setDueDate(new \DateTime('tomorrow'));

$form = $this->createFormBuilder($task)
->add('task', TextType::class)
->add('dueDate', DateType::class)
->add('save', SubmitType::class, ['label' => 'Create Task'])
->getForm();

// ...
}
}
