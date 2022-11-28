<?php

namespace App\Controller;

use App\Entity\UserRegistering;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;


class RegisterController extends AbstractController
{
    /**
     * @Route("/register")
     */
    public function new(Request $request): Response
    {
        // creates a task object and initializes some data for this example
        $user = new UserRegistering();

        $form = $this->createFormBuilder($user)
            ->add('name', TextType::class)
            ->add('email', TextType::class)
            ->add('save', SubmitType::class, ['label' => 'Creer mon compte'])
            ->getForm();

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            // $form->getData() holds the submitted values
            // but, the original `$user` variable has also been updated
            $user = $form->getData();

            // ... perform some action, such as saving the task to the database
            return $this->redirectToRoute('register-success', ['user' => $user]);

        }

        return $this->renderForm('RegisterForm.html.twig', [
            'form' => $form,
        ]);
    }
}
