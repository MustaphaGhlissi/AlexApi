<?php
/**
 * Created by PhpStorm.
 * User: ODevS-Inc
 * Date: 10/17/2017
 * Time: 5:36 PM
 */

namespace Api\ApiBundle\Controller;


use Api\ApiBundle\Entity\Categories;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\View\View;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class CategoriesController extends Controller
{

    /**
     * @Rest\View()
     * @Rest\Get("/categories")
     */
    public function getCategoriesAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $categories = $em->getRepository(Categories::class)->findAll();
        return $categories;
    }


    /**
     * @Rest\View()
     * @Rest\Get("/categories/{id}")
     */
    public function getCategoryAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $category = $em->getRepository(Categories::class)->find($id);
        if (!$category) {
            return View::create(['message' => 'Category not found'], Response::HTTP_NOT_FOUND);
        }
        return $category;
    }
}