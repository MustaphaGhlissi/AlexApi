<?php
/**
 * Created by PhpStorm.
 * User: ODevS-Inc
 * Date: 10/17/2017
 * Time: 5:35 PM
 */

namespace Api\ApiBundle\Controller;


use Api\ApiBundle\Entity\Pages;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\View\View;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class PagesController extends Controller
{

    /**
     * @Rest\View()
     * @Rest\Get("/pages" ,name="pages_list")
     */
    public function getPagesAction()
    {
        $em = $this->getDoctrine()->getManager();
        $pages = $em->getRepository(Pages::class)->findAll();
        return $pages;
    }

    /**
     * @Rest\View()
     * @Rest\Get("/pages/{id}", name="pages_one", requirements={"id"="\d+"})
     */
    public function getPageAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $page = $em->getRepository(Pages::class)->find($id);
        if (!$page) {
            return View::create(['message' => 'Page not found'], Response::HTTP_NOT_FOUND);
        }
        return $page;
    }


    /**
     * CREATE PAGES
     * @Rest\View(statusCode=Response::HTTP_CREATED)
     * @Rest\Post("/pages", name="create_page")
     */
    public function postPagesAction(Request $request)
    {
        $page = new Pages();

        $page->setTitle($request->get('title'));
        $page->setMetaTags($request->get('metaTags'));
        $page->setMetaDescription($request->get('metaDescription'));
        $page->setPageType($request->get('pageType'));
        $page->setPageLayout($request->get('pageLayout'));
        $page->setSlug($request->get('slug'));
        $page->setCountry($request->get('country'));
        $page->setDate(new \DateTime('now'));
        $page->setSoundbite($request->get('soundbit'));
        $page->setDescription($request->get('description'));
        $page->setAutoselect($request->get('autoSelect'));
        $page->setUpdatedAt(new \DateTime('now'));

        //save Object into the DB
        $em = $this->getDoctrine()->getManager();
        $em->persist($page);
        $em->flush();
        return $page;
    }


    /**
     * DELETE ONE PAGE
     * @Rest\View(statusCode=Response::HTTP_NO_CONTENT)
     * @Rest\Delete("/pages/{id}", name="delete_page")
     */
    public function deletePageAction(Request $request)
    {
        //get Doctrine manager
        $em = $this->getDoctrine()->getManager();
        //get page by id
        $page = $em->getRepository(Pages::class)->find($request->get('id'));
        /* @var $page Pages */
        if ($page) {
            $em->remove($page);
            $em->flush();
            return View::create(['message' => 'Page deleted succesfuly'], Response::HTTP_ACCEPTED);
        }
        else{
            return View::create(['message' => 'Page not found'], Response::HTTP_NOT_FOUND);
        }
    }
    /**
     * UPDATE ONE PAGE
     * @Rest\View(statusCode=Response::HTTP_NO_CONTENT)
     * @Rest\Put("/pages/{id}", name="update_one_page", requirements={"id"="\d+"})
     */
    public function putPageAction(Request $request)
    {
        //get Doctrine manager
        $em = $this->getDoctrine()->getManager();
        //get page by id
        $page = $em->getRepository(Pages::class)->find($request->get('id'));
        /* @var $page Pages */
        if (empty($page)) {
            return View::create(['message' => 'Page not found'], Response::HTTP_NOT_FOUND);
        }
        else{
            $page->setTitle($request->get('title'));
            $page->setMetaTags($request->get('metaTags'));
            $page->setMetaDescription($request->get('metaDescription'));
            $page->setPageType($request->get('pageType'));
            $page->setPageLayout($request->get('pageLayout'));
            $page->setSlug($request->get('slug'));
            $page->setCountry($request->get('country'));
            $page->setSoundbite($request->get('soundbit'));
            $page->setDescription($request->get('description'));
            $page->setAutoselect($request->get('autoSelect'));
            $page->setUpdatedAt(new \DateTime('now'));
            $em->persist($page);
            $em->flush();
            return View::create(['message' => 'Page updated successfully'], Response::HTTP_ACCEPTED);
        }
    }

    /**
     * GET ALL ROWS IN PAGE
     * @Rest\View()
     * @Rest\Get("/pages/{id}/rows", name="pages_rows_list", requirements={"id"="\d+"})
     */
    public function getPagesRowsAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $page = $em->getRepository(Pages::class)->find($id);
        if (empty($page)) {
            return View::create(['message' => 'Page not found'], Response::HTTP_NOT_FOUND);
        }
        return $page->getRows();
    }



}