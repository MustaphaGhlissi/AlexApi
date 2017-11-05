<?php
/**
 * Created by PhpStorm.
 * User: ODevS-Inc
 * Date: 10/17/2017
 * Time: 5:37 PM
 */

namespace Api\ApiBundle\Controller;


use Api\ApiBundle\Entity\Materials;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\Controller\Annotations as Rest;

class MaterialsController extends Controller
{

    /**
     * @Rest\View()
     * @Rest\Get("/materials")
     */
    public function getMaterialsAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $materials = $em->getRepository(Materials::class)->findAll();
        return $materials;
    }


    /**
     * @Rest\View()
     * @Rest\Get("/materials/{id}")
     */
    public function getMaterialAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $material = $em->getRepository(Materials::class)->find($id);
        if (!$material) {
            return new JsonResponse(['message' => 'Material not found'], Response::HTTP_NOT_FOUND);
        }
        return $material;
    }
}