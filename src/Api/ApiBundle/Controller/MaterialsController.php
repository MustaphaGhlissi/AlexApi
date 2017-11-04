<?php
/**
 * Created by PhpStorm.
 * User: ODevS-Inc
 * Date: 10/17/2017
 * Time: 5:37 PM
 */

namespace Api\ApiBundle\Controller;


use Api\ApiBundle\Entity\Materials;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class MaterialsController extends Controller
{
    /**
     * @Route("/materials", name="materials_list")
     * @Method({"GET", "POST"})
     */
    public function getMaterialsAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $materials = $em->getRepository(Materials::class)->findAll();

        return new JsonResponse($materials);
    }


    /**
     * @param Request $request
     * @param $id
     * @return JsonResponse
     * @Route("/materials/{id}", name="materials_one", requirements={"id"="\d+"})
     * @Method("GET")
     */
    public function getMaterialAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $material = $em->getRepository(Materials::class)->find($request->get('id'));
        if (!$material) {
            return new JsonResponse(['message' => 'Material not found'], Response::HTTP_NOT_FOUND);
        }
        return new JsonResponse($material);
    }
}