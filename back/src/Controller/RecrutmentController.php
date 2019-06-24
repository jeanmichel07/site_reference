<?php

namespace App\Controller;

use App\Entity\Recrutment;
use App\Repository\RecrutmentRepository;
use Doctrine\Common\Persistence\ObjectManager;
use phpDocumentor\Reflection\Types\Null_;
use phpDocumentor\Reflection\Types\This;
use function PHPSTORM_META\type;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RecrutmentController extends AbstractController
{
    /**
     * @var RecrutmentRepository
     */
    private $recrutmentRepository;
    private $em;

    public function __construct(RecrutmentRepository $recrutmentRepository, ObjectManager $em)
    {
        $this->recrutmentRepository = $recrutmentRepository;
        $this->em = $em;
    }

    /**
     * @Route("/affiche/recrutement", name="affiche_recrut")
     */
    public function read()
    {
        $recru=$this->recrutmentRepository->findAll();
        return $this->render('recrutment/read.html.twig',['recrut'=>$recru]);
    }

    /**
     * @Route("/ajouter/recrutement", name="ajout_recrutement")
     */
    public function create(Request $request)
    {
        $recrutement=new Recrutment();

        $form= $this->createFormBuilder($recrutement)
        ->add('post',TextType::class,[
            'attr'=>[
                'placeholder'=>'Poste',

            ],
            'label'=>'Poste',
        ])
        ->add('profil', TextareaType::class,[
            'attr'=>[
                'placeholder'=>'Profile...',
                'class'=>'test'
            ]
        ])
        ->add('mission',TextareaType::class,[
            'attr'=>[
                'placeholder'=>'Mission...'
            ]
        ])

            ->add('fichier',FileType::class,[
                'data_class'=>null,
                'required'=>false,
                'label'=>'Fichier',
            ])
            ->add('autre',TextareaType::class,[
                'attr'=>[
                    'placeholder'=>'autre',
                ],
                'label'=>'Autres'
            ])
        ->getForm();

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $em=$this->getDoctrine()->getManager();

            $file=$recrutement->getFichier();
            $filename=md5(uniqid()).'.'.$file->guessExtension();
            $file->move($this->getParameter('upload_directory'), $filename);
            $recrutement->setFichier($filename);

            $em->persist($recrutement);
            $em->flush();
            return $this->redirectToRoute('affiche_recrut');
        }
        return $this->render('recrutment/create.html.twig',['form'=>$form->createView()]);

    }

    /**
     * @param Recrutment $recrutment
     * @param Request $request
     * @return RedirectResponse|Response
     * @Route("/update/recrutment/{id}", name="update_recrutment")
     */
    public function update(Recrutment $recrutment, Request $request)
    {
        $form=$this->createFormBuilder($recrutment)
            ->add('post')
            ->add('profil')
            ->add('mission')
            ->add('autre')
            ->getForm();
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $this->em->flush();
            return $this->redirectToRoute("affiche_recrut");
        }
        return $this->render('recrutment/update.html.twig',[
            'pro'=>$recrutment,
            'form'=>$form->createView()]);
    }

    /**
     * @param Recrutment $recrutment
     * @param Request $request
     * @return Response
     * @Route("/updatephoto/recrutment/{id}", name="updatephot_recrut")
     */
    public  function updatePhoto(Recrutment $recrutment, Request $request){
        $form=$this->createFormBuilder($recrutment)
            ->add('fichier', FileType::class,[
                'data_class'=>null
            ])
            ->getForm();
        $form->handleRequest($request);
        if($form->isSubmitted() && $form->isValid()){
            $em=$this->getDoctrine()->getManager();

            $file=$recrutment->getFichier();
            $filename=md5(uniqid()).'.'.$file->guessExtension();
            $file->move($this->getParameter('upload_directory'), $filename);
            $recrutment->setFichier($filename);

            $em->persist($recrutment);
            $em->flush();
            return $this->redirectToRoute('show_recrutment',['id'=>$recrutment->getId()]);

        }

        return $this->render('recrutment/modphoto.html.twig',[
            'form'=>$form->createView()
        ]);
    }

    /**
     * @Route("/show/recrutment/{id}", name="show_recrutment")
     * @param Recrutment $recrutment
     * @return Response
     */
    public function show(Recrutment $recrutment):Response
    {
        return $this->render('recrutment/show.html.twig',[
            'recrut'=>$recrutment
        ]);
    }

       /**
     * @Route("/delete/recrutement/{id}", name="delete_recrut")
     * @param Recrutment $recrutment
     * @return RedirectResponse
     */
    public function delete(Recrutment $recrutment)
    {
        $em=$this->getDoctrine()->getManager();
        $em->remove($recrutment);
        $em->flush();
        return $this->redirectToRoute("affiche_recrut");
    }

}
