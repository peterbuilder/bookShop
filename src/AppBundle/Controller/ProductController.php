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
        $name = $request->request->get('name');
        $category = $request->request->get('category');
        $price = $request->request->get('price');
        $quantity = $request->request->get('quantity');

        $product->setName($name);
        $product->setCategory($category);
        $product->setPrice($price);
        $product->setQuantity($quantity);

        $em = $this->getDoctrine()->getManager();
        $em->persist($product);
        $em->flush();

        return [
            'name' => $name,
            'category' => $category,
            'price' => $price,
            'quantity' => $quantity
            ];
    }

    /**
     * @Route("/showFormAddProduct")
     * @Template()
     */
    public function showFormAddProductAction()
    {
        return [];
    }

}