<?php

namespace App\Controller;

use App\Entity\Equipe;
use App\Entity\Visitor;
use App\Repository\VisitorRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class VisitorController extends AbstractController
{
    /**
     * @var VisitorRepository
     */
    private $repository;

    public function __construct(VisitorRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @Route("/visitor", name="visitor")
     */
    public function index()
    {
        return $this->render('visitor/login.html.twig', [
            'controller_name' => 'VisitorController',
        ]);
    }

    /**
     * @return \Symfony\Component\HttpFoundation\Response
     * @Route("/show/visitor/{id}", name="message_view")
     */
    public  function show(Visitor $visitor){
        return $this->render('visitor/show.html.twig',[
            'v'=>$visitor
        ]);
    }
    /**
     * @Route("/read/message",name="read_message")
     */
    public function read()
    {
        $message=$this->repository->findMessage();
        return $this->render('visitor/read.html.twig',[
            'message'=>$message
        ]);
    }
    public function create(Request $request){
        $visitor=new Visitor();

        $form= $this->createFormBuilder($visitor)

            ->add('name',TextType::class,[
                'attr'=>[
                    'placeholder'=>'Nom',
                ],
                'label'=>'Nom'
            ])
            ->add('titre',TextType::class,[
                'attr'=>[
                    'placeholder'=>'Titre de votre message',
                ],
                'label'=>'Titre'
            ])
            ->add('email',TextType::class,[
                'attr'=>[
                    'placeholder'=>'Entrez votre adresse mail',
                ],
                'label'=>'Email'
            ])
            ->add('message',TextType::class,[
                'attr'=>[
                    'placeholder'=>'Ecrir votre Text',
                ],
                'label'=>'Message'
            ])
            ->getForm();

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $em=$this->getDoctrine()->getManager();

            $file=$visitor->getFichier();
            $filename=md5(uniqid()).'.'.$file->guessExtension();
            $file->move($this->getParameter('upload_directory'), $filename);
            $visitor->setFichier($filename);

            $em->persist($visitor);
            $em->flush();
            return $this->redirectToRoute('affiche_visitor');
        }
        return $this->render('visitor/read.html.twig',['form'=>$form->createView()]);

    }

    /**
     * @param Visitor $visitor
     * @Route("/delete/visiteur/{id}", name="delete_equipe")
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function delete(Visitor $visitor)
    {
        $em=$this->getDoctrine()->getManager();
        $em->remove($visitor);
        $em->flush();
        return $this->redirectToRoute('read_message');
    }
}
