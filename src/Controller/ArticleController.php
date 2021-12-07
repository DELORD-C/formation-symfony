<?php

namespace App\Controller;

use App\Entity\Article;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    /**
     * @Route("/article/new")
     */
    public function createAction(ManagerRegistry $doctrine, Request $request) {
        $article = new Article(); // On récupère un schéma d'article vide

        $form = $this->createFormBuilder($article) // On créé un formulaire correspondant à notre objet article
            ->add('titre', TextType::class)
            ->add('auteur', TextType::class)
            ->add('description', TextType::class)
            ->add('save', SubmitType::class, ['label' => 'Valider'])
            ->getForm();

        $form->handleRequest($request); //On récupère les champs de notre requête et on les envoie à notre formulaire

        if ($form->isSubmitted() && $form->isValid()) {
            $article = $form->getData();
            $manager = $doctrine->getManager();
            $manager->persist($article);
            $manager->flush();

            echo 'Envoyé';
        }

        return $this->render('article/new.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/article/{id}")
     */
    public function viewAction(ManagerRegistry $doctrine, int $id) {
        $article = $doctrine->getRepository(Article::class);
        $article = $article->find($id);

        if (!$article) {
            throw $this->createNotFoundException('Aucun article pour l\'id: ' . $id);
        }

        return $this->render(
            'article/view.html.twig', [
                'article' => $article
            ]
        );
    }

    /**
     * @Route("/articles/all")
     */
    public function showAction(ManagerRegistry $doctrine) {
        $articles = $doctrine->getRepository(Article::class);
        $articles = $articles->findAll();

        return $this->render('article/list.html.twig', array(
            'articles' => $articles
        ));
    }
}