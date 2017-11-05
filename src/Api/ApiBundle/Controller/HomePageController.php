<?php
/**
 * Created by PhpStorm.
 * User: ODevS-Inc
 * Date: 10/17/2017
 * Time: 5:36 PM
 */

namespace Api\ApiBundle\Controller;


use Api\ApiBundle\Entity\Categories;
use Api\ApiBundle\Entity\HomePageLayout;
use Api\ApiBundle\Entity\HomePageSettings;
use FOS\RestBundle\View\View;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class HomePageController extends Controller
{
    /**
     * @Rest\View()
     * @Rest\Get("/homepage_settings", name="home_page_settings")
     */
    public function getHomePageSettingsAction()
    {
        $em = $this->getDoctrine()->getManager();
        $homePageSettings = $em->getRepository(HomePageSettings::class)->findAll();
        return $homePageSettings;
    }


    /**
     * @Rest\View()
     * @Rest\Post("/homepage_settings", name="home_page_settings")
     */
    public function putHomePageSettingsAction(Request $request)
    {
        //get Doctrine manager
        $em = $this->getDoctrine()->getManager();
        //get page by id
        $homePageSettings = $em->getRepository(HomePageSettings::class)->find($request->get('id'));

        if (empty($homePageSettings)) {
            return View::create(['message' => 'HomePageSettings not found'], Response::HTTP_NOT_FOUND);
        }
        else{
            $homePageSettings->setSplashscreen($request->get('splashScreen'));
            $homePageSettings->setDefaultIndexOrderBy($request->get('defaultIndexOrderBy'));
            $homePageSettings->setDefaultIndexOrderCol($request->get('defaultIndexOrderCol'));
            $homePageSettings->setIndexCols($request->get('indexCols'));
            $homePageSettings->setPosterSizeX($request->get('posterSizeX'));
            $homePageSettings->setPosterSizeY($request->get('posterSizeY'));
            $homePageSettings->setStartPositionX($request->get('startPositionX'));
            $homePageSettings->setStartPositionX($request->get('startPositionX'));
            $homePageSettings->setUpdatedAt(new \DateTime('now'));
            $em->persist($homePageSettings);
            $em->flush();
            return View::create(['message' => 'HomePageSettings updated successfully'], Response::HTTP_ACCEPTED);
        }
    }



    /**
     * @Rest\View()
     * @Rest\Get("/homepage_layouts", name="home_page_layouts")
     */
    public function getHomePageLayoutsAction()
    {
        $em = $this->getDoctrine()->getManager();
        $homePageLayouts = $em->getRepository(HomePageLayout::class)->findAll();
        return $homePageLayouts;
    }


    /**
     * @Rest\View()
     * @Rest\Post("/homepage_layouts", name="home_page_layouts")
     */
    public function postHomePageLayoutAction(Request $request)
    {
        $homePageLayout = new HomePageLayout();
        $homePageLayout->setWidth($request->get('width'));
        $homePageLayout->setHeight($request->get('height'));
        $homePageLayout->setX($request->get('x'));
        $homePageLayout->setY($request->get('y'));
        $homePageLayout->setImage($request->get('image'));
        $homePageLayout->setUpdatedAt(new \DateTime('now'));
        $em = $this->getDoctrine()->getManager();
        $em->persist($homePageLayout);
        $em->flush();
        return $homePageLayout;
    }


    /**
     * @Rest\View()
     * @Rest\Get("/homepage_layouts/{id}", name="home_page_layout", requirements={"id"="\d+"})
     */
    public function getHomePageLayoutAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $homePageLayout = $em->getRepository(HomePageLayout::class)->find($id);
        if (!$homePageLayout) {
            return View::create(['message' => 'Material not found'], Response::HTTP_NOT_FOUND);
        }
        return $homePageLayout;
    }


    /**
     * @Rest\View()
     * @Rest\Get("/menu", name="menu")
     */
    public function getMenuAction()
    {
        $em = $this->getDoctrine()->getManager();
        $menu = $em->getRepository(Categories::class)->findMenu();
        return $menu;
    }




    /**
     * DELETE ONE PAGE
     * @Rest\View(statusCode=Response::HTTP_NO_CONTENT)
     * @Rest\Delete("/homepage_layouts/{id}", name="delete_homepage_layout")
     */
    public function deleteHomePageLayoutAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $homePageLayout = $em->getRepository(HomePageLayout::class)->find($id);
        if ($homePageLayout) {
            $em->remove($homePageLayout);
            $em->flush();
            return View::create(['message' => 'HomePageLayout deleted successfully'], Response::HTTP_ACCEPTED);
        }
        else{
            return View::create(['message' => 'HomePageLayout not found'], Response::HTTP_NOT_FOUND);
        }
    }
    /**
     * UPDATE ONE PAGE
     * @Rest\View(statusCode=Response::HTTP_NO_CONTENT)
     * @Rest\Put("/homepage_layouts/{id}", name="update_one_homepage_layout", requirements={"id"="\d+"})
     */
    public function putPageAction(Request $request)
    {
        //get Doctrine manager
        $em = $this->getDoctrine()->getManager();
        //get page by id
        $homePageLayout = $em->getRepository(HomePageLayout::class)->find($request->get('id'));
        if (empty($page)) {
            return View::create(['message' => 'Page not found'], Response::HTTP_NOT_FOUND);
        }
        else{
            $homePageLayout->setWidth($request->get('width'));
            $homePageLayout->setHeight($request->get('height'));
            $homePageLayout->setX($request->get('x'));
            $homePageLayout->setY($request->get('y'));
            $homePageLayout->setImage($request->get('image'));
            $homePageLayout->setUpdatedAt(new \DateTime('now'));
            $em->persist($page);
            $em->flush();
            return View::create(['message' => 'HomePageLayout updated successfully'], Response::HTTP_ACCEPTED);
        }
    }

}