<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

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

        return new JsonResponse([]);
    }

    /**
     * Create an Article entity.
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function createAction(Request $request)
    {

        return new JsonResponse([]);
    }

    /**
     * Delete an existing Article entity by Id.
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function deleteAction(Request $request)
    {

        return new JsonResponse([]);
    }
}
