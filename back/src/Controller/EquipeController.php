<?php

namespace App\Controller;

use App\Entity\Equipe;
use App\Entity\Recrutment;
use App\Repository\EquipeRepository;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EquipeController extends AbstractController
{

    /**
     * @var EquipeRepository
     */
    private $equipeRepository;

    public function __construct(EquipeRepository $equipeRepository)
    {
        $this->equipeRepository = $equipeRepository;
    }

    /**
     * @Route("/equipe", name="equipe")
     */
    public function index()
    {
        return $this->render('equipe/login.html.twig', [
            'controller_name' => 'EquipeController',
        ]);
    }

    /**
     * @Route("/create/equipe", name="create_equipe")
     * @param Request $request
     * @return Response
     * @throws \Exception
     */
    public function create(Request $request)
    {
        $equipe=new Equipe();
        $form=$this->createFormBuilder($equipe)
            ->add('nom',TextType::class,[
                'attr'=>[
                    'placeholder'=>'Nom'
                ]
            ])
            ->add('poste',TextType::class,[
                'attr'=>[
                    'placeholder'=>'Poste'
                ]
            ])
            ->add('image',FileType::class,[
                'required'=>false,
                'label'=>'Image',
            ])
            ->getForm();
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $em=$this->getDoctrine()->getManager();

                $file=$equipe->getImage();
                $filename=md5(uniqid()).'.'.$file->guessExtension();
                $file->move($this->getParameter('upload_directory'), $filename);
                $equipe->setImage($filename);

            $em->persist($equipe);
            $em->flush();
            return $this->redirectToRoute('read_equipe');
        }
        return $this->render('equipe/create.html.twig',['form'=>$form->createView()]);
    }

    /**
     * @return Response
     * @Route("/read/equipe", name="read_equipe")
     */
    public function read()
    {
        $equipe=$this->equipeRepository->findAll();

        return $this->render('equipe/read.html.twig',['equipe'=>$equipe]);
    }

    /**
     * @Route("/show/equipe/{id}", name="show_equipe")
     * @param Equipe $equipe
     * @return Response
     */
    public function show(Equipe $equipe):Response
    {
        return $this->render('equipe/show.html.twig',[
            'e'=>$equipe
        ]);
    }

    /**
     * @param Equipe $equipe
     * @param Request $request
     * @return RedirectResponse|Response
     * @Route("/edit/equipe/{id}", name="edit_equipe")
     */
    public function edit(Equipe $equipe, Request $request)
    {
        $form=$this->createFormBuilder($equipe)
            ->add('nom',TextType::class,[
                'attr'=>[
                    'placeholder'=>'Nom'
                ]
            ])
            ->add('poste',TextType::class,[
                'attr'=>[
                    'placeholder'=>'Poste'
                ]
            ])
            ->getForm();
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $em=$this->getDoctrine()->getManager();

            $em->persist($equipe);
            $em->flush();
            return $this->redirectToRoute('read_equipe');
        }

        return $this->render('equipe/edit.html.twig',['form'=>$form->createView()]);
    }


    /**
     * @param Equipe $equipe
     * @param Request $request
     * @return RedirectResponse|Response
     * @Route("/editePhoto/equipe/{id}", name="editePhoto_equipe")
     */
    public  function editePhoto(Equipe $equipe, Request $request){
        $form=$this->createFormBuilder($equipe)
            ->add('image', FileType::class,[
                'data_class'=>null
            ])
            ->getForm();
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $em=$this->getDoctrine()->getManager();

            $file=$equipe->getImage();
            $filename=md5(uniqid()).'.'.$file->guessExtension();
            $file->move($this->getParameter('upload_directory'), $filename);
            $equipe->setImage($filename);

            $em->persist($equipe);
            $em->flush();
            return $this->redirectToRoute('show_equipe',['id'=>$equipe->getId()]);

        }

        return $this->render('equipe/updatequip.html.twig',[
            'form'=>$form->createView()
        ]);
    }

    /**
     * @param Equipe $equipe
     * @return RedirectResponse
     * @Route("/delete/equipe/{id}")
     */
    public function delete(Equipe $equipe)
    {
        $em=$this->getDoctrine()->getManager();
        $em->remove($equipe);
        $em->flush();
        return $this->redirectToRoute('read_equipe');
    }
}
