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
     * @Rest\Get("/categories" ,name="categories_list")
     */
    public function getCategoriesAction()
    {
        $em = $this->getDoctrine()->getManager();
        $categories = $em->getRepository(Categories::class)->findAll();
        return $categories;
    }

    /**
     * CREATE PAGES
     * @Rest\View(statusCode=Response::HTTP_CREATED)
     * @Rest\Post("/categories", name="create_category")
     */
    public function postCategoryAction(Request $request)
    {
        $category = new Categories();

        $category->setTitle($request->get('title'));
        $category->setSlug($request->get('slug'));
        $category->setPosition($request->get('position'));
        $category->setLeftRight($request->get('leftRight'));
        $category->setUpdatedAt(new \DateTime('now'));
        $em = $this->getDoctrine()->getManager();
        $em->persist($category);
        $em->flush();
        return $category;
    }

    /**
     * @Rest\View()
     * @Rest\Get("/categories/{id}", name="categories_one", requirements={"id"="\d+"})
     */
    public function getCategoryAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $category = $em->getRepository(Categories::class)->find($id);
        if (!$category) {
            return View::create(['message' => 'Category not found'], Response::HTTP_NOT_FOUND);
        }
        return $category;
    }



    /**
     * DELETE ONE PAGE
     * @Rest\View(statusCode=Response::HTTP_NO_CONTENT)
     * @Rest\Delete("/categories/{id}", name="delete_category")
     */
    public function deleteCategoryAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $category = $em->getRepository(Categories::class)->find($id);
        if ($category) {
            $em->remove($category);
            $em->flush();
            return View::create(['message' => 'Category deleted successfully'], Response::HTTP_ACCEPTED);
        }
        else{
            return View::create(['message' => 'Category not found'], Response::HTTP_NOT_FOUND);
        }
    }
    /**
     * UPDATE ONE PAGE
     * @Rest\View(statusCode=Response::HTTP_NO_CONTENT)
     * @Rest\Put("/categories/{id}", name="update_one_category", requirements={"id"="\d+"})
     */
    public function putCategoryAction(Request $request,$id)
    {
        $em = $this->getDoctrine()->getManager();
        $category = $em->getRepository(Categories::class)->find($id);

        if (empty($category)) {
            return View::create(['message' => 'Page not found'], Response::HTTP_NOT_FOUND);
        }
        else{
            $category->setTitle($request->get('title'));
            $category->setSlug($request->get('slug'));
            $category->setLeftRight($request->get('leftRight'));
            $category->setPosition($request->get('position'));
            $category->setUpdatedAt(new \DateTime('now'));
            $em->persist($category);
            $em->flush();
            return View::create(['message' => 'Category updated successfully'], Response::HTTP_ACCEPTED);
        }
    }

}