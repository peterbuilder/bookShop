<?php
/**
 * Created by PhpStorm.
 * User: piotr
 * Date: 13.03.17
 * Time: 18:04
 */

namespace AppBundle\Controller;


use AppBundle\Entity\Product;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ProductController extends Controller
{

    /**
     * @Route("/addProduct")
     * @Template()
     */
    public function addProductAction(Request $request)
    {
        $product = new Product();

        $product->setName('G6');
        $product->setCategory('smartphone');
        $product->setPrice(500);
        $product->setQuantity(5);

        $em = $this->getDoctrine()->getManager();
        $em->persist($product);
        $em->flush();

        return new Response();
    }

}