<?php
/**
 * Created by PhpStorm.
 * User: ODevS-Inc
 * Date: 10/17/2017
 * Time: 5:37 PM
 */

namespace Api\ApiBundle\Controller;


use Api\ApiBundle\Entity\Materials;
use FOS\RestBundle\View\View;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\Controller\Annotations as Rest;

class MaterialsController extends Controller
{

    /**
     * @Rest\View()
     * @Rest\Get("/materials", name="materials_list")
     */
    public function getMaterialsAction()
    {
        $em = $this->getDoctrine()->getManager();
        $materials = $em->getRepository(Materials::class)->findAll();
        return $materials;
    }

    /**
     * CREATE PAGES
     * @Rest\View(statusCode=Response::HTTP_CREATED)
     * @Rest\Post("/materials", name="create_material")
     */
    public function postMaterialAction(Request $request)
    {
        $material = new Materials();
        $material->setText($request->get('text'));
        $material->setUpdatedAt(new \DateTime('now'));
        $em = $this->getDoctrine()->getManager();
        $em->persist($material);
        $em->flush();
        return $material;
    }


    /**
     * @Rest\View()
     * @Rest\Get("/materials/{id}", name="materials_one" , requirements={"id"="\d+"})
     */
    public function getMaterialAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $material = $em->getRepository(Materials::class)->find($id);
        if (!$material) {
            return View::create(['message' => 'Material not found'], Response::HTTP_NOT_FOUND);
        }
        return $material;
    }

    /**
     * DELETE ONE PAGE
     * @Rest\View(statusCode=Response::HTTP_NO_CONTENT)
     * @Rest\Delete("/materials/{id}", name="delete_material")
     */
    public function deleteMaterialAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $material = $em->getRepository(Materials::class)->find($id);
        if ($material) {
            $em->remove($material);
            $em->flush();
            return View::create(['message' => 'Material deleted successfully'], Response::HTTP_ACCEPTED);
        }
        else{
            return View::create(['message' => 'Material not found'], Response::HTTP_NOT_FOUND);
        }
    }
    /**
     * UPDATE ONE PAGE
     * @Rest\View(statusCode=Response::HTTP_NO_CONTENT)
     * @Rest\Put("/materials/{id}", name="update_one_material", requirements={"id"="\d+"})
     */
    public function putMaterialAction(Request $request,$id)
    {
        $em = $this->getDoctrine()->getManager();
        $material = $em->getRepository(Materials::class)->find($id);

        if (empty($material)) {
            return View::create(['message' => 'Material not found'], Response::HTTP_NOT_FOUND);
        }
        else{
            $material->setText($request->get('text'));
            $material->setUpdatedAt(new \DateTime('now'));
            $em->persist($material);
            $em->flush();
            return View::create(['message' => 'Material updated successfully'], Response::HTTP_ACCEPTED);
        }
    }
}