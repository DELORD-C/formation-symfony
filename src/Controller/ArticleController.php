<?php

namespace App\Controller;

use App\Entity\Article;
use App\Services\Messager;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends AbstractController
{
    /**
     * @Route("/article/new")
     */
    public function createAction(ManagerRegistry $doctrine, Request $request): Response
    {
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

            $this->addFlash('success', Messager::randomMessage());

            return $this->redirect($this->generateUrl('app_article_show'));
        }

        return $this->render('article/new.html.twig', [
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/article/{id}")
     */
    public function viewAction(ManagerRegistry $doctrine, int $id): Response {
        $article = $doctrine->getRepository(Article::class);
        $article = $article->find($id);

        if (!$article) {
            throw $this->createNotFoundException('Aucun article pour l\'id: ' . $id);
        }

        return $this->render(
            'article/view.html.twig', [
                'article' => $article,
            ]
        );
    }

    /**
     * @Route("/article/all", priority=1)
     */
    public function showAction(ManagerRegistry $doctrine): Response {
        $articles = $doctrine->getRepository(Article::class);
        $articles = $articles->findAll();

        return $this->render('article/list.html.twig', array(
            'articles' => $articles
        ));
    }

    /**
     * @Route("/article/delete/{id}")
     */
    public function deleteAction(ManagerRegistry $doctrine, $id): Response {
        $manager = $doctrine->getManager();
        $articles = $doctrine->getRepository(Article::class);
        $article = $articles->find($id);

        if (!$article) {
            throw $this->createNotFoundException("Il n'y a pas d'article pour l'id $id.");
        }

        $manager->remove($article);
        $manager->flush();

        return $this->redirect($this->generateUrl('app_article_show'));
    }

    /**
     * @Route("/article/edit/{id}")
     */
    public function updateAction(ManagerRegistry $doctrine, Request $request, $id): Response {
        $articles = $doctrine->getRepository(Article::class);
        $article = $articles->find($id);

        if (!$article) {
            throw $this->createNotFoundException("Il n'y a pas d'article pour l'id $id.");
        }

        $form = $this->createFormBuilder($article)
            ->add('titre', TextType::class)
            ->add('auteur', TextType::class)
            ->add('description', TextType::class)
            ->add('save', SubmitType::class, ['label' => 'Valider'])
            ->getForm();

        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $manager = $doctrine->getManager();
            $article = $form->getData();
            $manager->flush();

            return $this->redirect($this->generateUrl('app_article_show'));
        }

        return $this->render('article/edit.html.twig', [
            'form' => $form->createView(),
            'article' => $article
        ]);
    }

    /**
     * @Route("article/lastTen", priority=1)
     */
    public function getLastTen(ManagerRegistry $doctrine): Response {
        $articles = $doctrine->getRepository(Article::class);
        return $this->render('article/lastTen.html.twig', [
            'articles' => $articles->getLastTenArticles()
        ]);
    }

    /**
     * @Route("article/first", priority=2)
     */
    public function getFirst(ManagerRegistry $doctrine): Response {
        $articles = $doctrine->getRepository(Article::class);
        return $this->render('article/first.html.twig', [
            'articles' => $articles->getFirst()
        ]);
    }
}