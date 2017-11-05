<?php
/**
 * Created by PhpStorm.
 * User: ODevS-Inc
 * Date: 10/17/2017
 * Time: 5:36 PM
 */

namespace Api\ApiBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomePageController extends Controller
{

	/**
	 * GET ONE PAGES_SETTING
	 * @param Request $request
	 * @return JsonResponse
	 * @Rest\View()
     * @Rest\Get("/homepage_settings", name="home_page_settings")
     */
    public function getPagesSettingsAction(Request $request)
    {
    	//get Doctrine manager
        $em = $this->getDoctrine()->getManager();
        //find  pages_settings objects
       $homepagesettings = $em->getRepository(HomePageSettings::class)->find($request->get('id'));

        //check if there is an object with the $id
         if (empty($homepagesettings)) {
            return View::create(['message' => 'home page settings not found'], Response::HTTP_NOT_FOUND);
        }

        return $homepagesettings;
    }


    /**
     * UPDATE ONE HOMEPAGESETTINGS
     * @param Request $request
     * @return JsonResponse
     * @Rest\View(statusCode=Response::HTTP_NO_CONTENT)
     * @Rest\Put("/homepage_settings", name="update_one_home_page_settings")
     */
    public function putPageAction(Request $request)
    {
    	//get Doctrine manager
        $em = $this->getDoctrine()->getManager();
        //get page by id
        $homepagesettings = $em->getRepository(HomePageSettings::class)->find($request->get('id'));
        /* @var $page Pages */

        if (empty($homepagesettings)) {
        	return View::create(['message' => 'home page settings not found'], Response::HTTP_NOT_FOUND);
        }	

        else{

        $homepagesettingshomepagesettings->setSplashscreen($request->get('splash_screen'));
		$homepagesettings->setPosterSizeX($request->get('poster_size_x'));
		$homepagesettings->setPosterSizeY($request->get('poster_size_y'));
    	$homepagesettings->setStartPositionX($request->get('start_position_x'));
    	$homepagesettings->setStartPositionY($request->get('start_position_y'));
    	$homepagesettings->setDefaultIndexOrderCol($request->get('default_index_order_col'));
    	$homepagesettings->setDefaultIndexOrderBy($request->get('default_index_order_by'));
    	$homepagesettings->setIndexCols($request->get('index_cols'));
    	$homepagesettings->setUpdatedAt(new \DateTime('now'));

		$em->persist($homepagesettings);
        $em->flush();

         return View::create(['message' => 'home page settings updated succesfuly'], Response::HTTP_ACCEPTED);

        }
    }

 	/**
	 * GET ALL HOME PAGES LAYOUT
	 * @param Request $request
	 * @return JsonResponse
	 * @Rest\View()
     * @Rest\Get("/homepage_layout", name="home page_layout)
     */

    public function getHomePageLayoutsAction(Request $request)
    {

    	//get Doctrine manager
        $em = $this->getDoctrine()->getManager();
        //find all home page layout objects
        $homePageLayouts = $em->getRepository(HomePageLayout::class)->findAll();

      	return $pages;
    }


    /**
     * GET ONe HOME PAGE LAYOUT
     * @param Request $request
     * @return JsonResponse
     * @Rest\View()
     * @Rest\Get("/homepage_layout/{id}", name="one_home_page_layout", requirements={"id"="\d+"})
     * 
     */
    public function getHomePageLayoutAction(Request $request)
    {
    	//get Doctrine manager
        $em = $this->getDoctrine()->getManager();
        //get page by id
        $homePageLayout = $em->getRepository(HomePageLayout::class)->find($request->get('id'));

        //check if there is an object with the $id
         if (empty($homePageLayout)) {
            return View::create(['message' => 'home PageL ayout not found'], Response::HTTP_NOT_FOUND);
        }

        return $homePageLayout;
    }


     /**
     * DELETE ONE HOMEPAGE LAYOUT
     * @param Request $request
     * @return JsonResponse
     * @Rest\View(statusCode=Response::HTTP_NO_CONTENT)
     * @Rest\Delete("/homepage_layout/{id}", name="delete_home_page_layout" , requirements={"id"="\d+"})
     */
    public function deleteHomePageLayoutAction(Request $request)
    {
       //get Doctrine manager
        $em = $this->getDoctrine()->getManager();
        //get page by id
        $homePageLayout = $em->getRepository(HomePageLayout::class)->find($request->get('id'));
        /* @var $page Pages */

        if ($homePageLayout) {
            $em->remove($homePageLayout);
            $em->flush();
            return View::create(['message' => 'home PageL ayout deleted succesfuly'], Response::HTTP_ACCEPTED);

        }
        else{
        	return View::create(['message' => 'home PageL layout not found'], Response::HTTP_NOT_FOUND);

        }
    }


    /**
     * UPDATE ONE HOME PAGE LAYOUT
     * @param Request $request
     * @return JsonResponse
     * @Rest\View(statusCode=Response::HTTP_NO_CONTENT)
     * @Rest\Put("/homepage_layout/{id}", name="update_home_page_layout", requirements={"id"="\d+"})
     */
    public function putPageAction(Request $request)
    {
    	//get Doctrine manager
        $em = $this->getDoctrine()->getManager();
        //get page by id
        $homePageLayout = $em->getRepository(HomePageLayout::class)->find($request->get('id'));
        /* @var $page Pages */

        if (empty($homePageLayout)) {
        	return View::create(['message' => 'home Page Layout  not found'], Response::HTTP_NOT_FOUND);
        }	

        else{

        $homepagesettingshomepagesettings->setSplashscreen($request->get('splash_screen'));
		$homepagesettings->setPosterSizeX($request->get('poster_size_x'));
		$homepagesettings->setPosterSizeY($request->get('poster_size_y'));
    	$homepagesettings->setStartPositionX($request->get('start_position_x'));
    	$homepagesettings->setStartPositionY($request->get('start_position_y'));
    	$homepagesettings->setDefaultIndexOrderCol($request->get('default_index_order_col'));
    	$homepagesettings->setDefaultIndexOrderBy($request->get('default_index_order_by'));
    	$homepagesettings->setIndexCols($request->get('index_cols'));
    	$homepagesettings->setUpdatedAt(new \DateTime('now'));
		$em->persist($homepagesettings);
        $em->flush();

         return View::create(['message' => 'home Page Layout  updated succesfuly'], Response::HTTP_ACCEPTED);

        }
    }

   

}