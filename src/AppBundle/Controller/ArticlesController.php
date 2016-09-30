<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Article;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\EventListener\DumpListener;

class ArticlesController extends Controller
{
    /**
     * Get all existing Article entity.
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function listAction(Request $request)
    {

        return new JsonResponse([]);
    }

    /**
     * Get One Article entity by ID.
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function showAction(Request $request)
    {
        dump($request->get('id'));
        die;
        return new JsonResponse([]);
    }

    /**
     * Create an Article entity.
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function createAction(Request $request)
    {
        $article = new Article();
        $article->setTitle("Coucou les mec à #### donf*");
        $article->setLeadingText("An amazing Article about saying: Coucou");
        $article->setBody("An amazing Article about saying: Coucou, Bla bla blz bla");
        $article->setCreatedBy("Simon Bayol");


        $em = $this->get('doctrine.orm.entity_manager');

        $em->persist($article);
        $em->flush();

        return new JsonResponse([]);
    }

    /**
     * Delete an existing Article entity by Id.
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function deleteAction(Request $request)
    {
        echo " try to delete";
        dump($request->get('id'));
        die;
        return new JsonResponse([]);
    }
}
