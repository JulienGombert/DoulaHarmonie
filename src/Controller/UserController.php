<?php


namespace App\Controller;


use App\Entity\User;
use App\Form\UserType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    /**
     * @Route("/contact", name="contact")
     */
    /*public function contactForm(Request $request, EntityManagerInterface $entityManager)
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        $formUser = $form->createView();

        if ($request->isMethod('Post')){
            $form->handleRequest($request);
            if ($form->isValid()){
                $entityManager->persist($user);
                $entityManager->flush();
            }
        }*/

    /*return $this->render('Blocks/User/_form_contact.html.twig', [
            'formUser' => $formUser
        ]);*/

        /*return $this->render('bundles/FOSUserBundle/layout.html.twig', [
            'formUser' => $formUser
        ]);*/

        /*return $this->render('bundles/FOSUserBundle/Registration/register_content.html.twig', [
            'formUser' => $formUser
        ]);*/

        /*return $this->render('bundles/FOSUserBundle/Security/login_content.html.twig', [
            'formUser' => $formUser
        ]);*/
    /*}*/


    /**
     * @Route("/register/after", name="register_after")
     */
    public function registrationAfter(Request $request, EntityManagerInterface $entityManager)
    {
        //on récupère les infos de l'utilisateur nouvellement créé pour avoir son ID
        $user =  $this->container->get('security.token_storage')->getToken()->getUser();

        $form = $this->createForm(UserType::class, $user);
        $formView = $form->createView();

        if($request->isMethod('POST')){
            $form->handleRequest($request);

            if($form->isValid()){

                $entityManager->persist($user);
                $entityManager->flush();

                return $this->redirectToRoute('index');
            }
        }

        return $this->render('Blocks/User/_form_contact.html.twig',[
            'formUser' => $formView
        ]);
    }

}

       /* if ($request->isMethod('Post')) {
            $form->handleRequest($request);

            if ($form->isValid()){
            $entityManager->persist($user);
            $entityManager->flush();
            };

            return $this->render('Blocks/User/_form_contact.html.twig', [
                'formUser' => $formUser
            ]);
    }*/

