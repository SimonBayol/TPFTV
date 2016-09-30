<?php

namespace AppBundle\Controller;

use AppBundle\Form\ArticleType;
use AppBundle\Entity\Article;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\Annotations\Get;
use FOS\RestBundle\Controller\Annotations\Post;
use FOS\RestBundle\Controller\Annotations\Delete;
use FOS\RestBundle\View\ViewHandler;
use FOS\RestBundle\View\View;

class ArticlesController extends Controller
{
    /**
     * Get all existing Article entity.
     * @Get("/articles")
     * @Rest\View()
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function getArticlesAction(Request $request)
    {
        $articles = $this->get('doctrine.orm.entity_manager')
            ->getRepository('AppBundle:Article')
            ->findAll();
        /* @var $articles Article[] */

        // Création d'une vue FOSRestBundle
        $view = View::create($articles);
        $view->setFormat('json');

        return $view;
    }

    /**
     * Get One Article entity by ID.
     * @Get("/articles/{id}")
     * @ParamConverter("article", class="AppBundle:Article")
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function getArticleAction(Article $article)
    {
        $view = View::create($article);
        $view->setFormat('json');

        return $view;
    }

    /**
     * Create an Article entity.
     * @Post("/articles")
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function postArticlesAction(Request $request)
    {
        return $this->processForm($request);
    }

    /**
     * Validate and hydrate Article Entity.
     *
     * @param Request $request
     *
     * @return Article
     */
    private function processForm(Request $request)
    {
        $article = new Article();
        //Ici l'entité est hydraté par le form
        $form = $this->createForm(new ArticleType(), $article);
        $form->submit($request->request->all());
        // Les validations sont faites ici
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($article);
            $em->flush();

            //Si tout va bien on renvoi l'article enregistré en Json
            $view = View::create($article);
            $view->setFormat('json');

            return $view;
        }else{
            //TODO afficher la liste des erreures de validation
            return new Response('invalid data input', 400);
        }
    }

    /**
     * Delete an existing Article entity by Id.
     * @return \Symfony\Component\HttpFoundation\Response
     * @Delete("/articles/{id}")
     * @ParamConverter("article", class="AppBundle:Article")
     */
    public function deleteArticlesAction(Article $article)
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($article);
        $em->flush();
        return new Response(null, 204);// Response vide
    }
}
