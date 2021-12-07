<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    /**
     * @Route("/number")
     */
    public function number(): Response
    {
        $number = random_int(1, 100);

        return new Response(
            '<html><body>Number : ' . $number . '</body></html>'
        );
    }

    //Il est possible de préciser un schéma à respecter pour nos paramètres grâce à la variable requirements
    /**
     * @Route("/show/{name}", requirements={"name"="[0-9]+"})
     */
    public function showName(string $name = null): Response //Si on définit une valeur par défaut à un paramètre, il devient alors optionnel
    {
        return new Response(
            '<html><body>Bonjour' . ($name != null ? ' ' . $name : '') . '</body></html>'
        );
    }

    /**
     * @Route("/showId/{id}", methods={"GET"})
     */
    public function showId(string $id): Response {

        return new Response(
            '<html><body>Id : ' . $id . '</body></html>'
        );
    }

    /**
     * @Route("/count/{int}")
     */
    public function count($int = null): Response {
        if ($int != null && is_numeric($int)) {
            $return = [];
            for ($i = 0; $i <= intval($int); $i++) {
                array_push($return, $i);
            }
        }
        else {
            $return = 'Mauvais paramètre(s)';
        }
        return $this->render('index/number.html.twig', [
            'return' => $return
        ]);
    }

    /**
     * @Route("/")
     */
    public function indexRedirect(): Response {
        return $this->redirect($this->generateUrl('app_article_show'));
    }
}