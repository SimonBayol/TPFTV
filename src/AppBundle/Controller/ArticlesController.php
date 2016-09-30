<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class ArticlesController extends Controller
{

    public function listAction(Request $request)
    {

        return new JsonResponse([]);
    }

    public function showAction(Request $request)
    {

        return new JsonResponse([]);
    }

    public function createAction(Request $request)
    {

        return new JsonResponse([]);
    }

    public function deleteAction(Request $request)
    {

        return new JsonResponse([]);
    }
}
