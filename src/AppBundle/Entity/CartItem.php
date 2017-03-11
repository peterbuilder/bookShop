<?php
/**
 * Created by PhpStorm.
 * User: piotr
 * Date: 10.03.17
 * Time: 21:26
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

class CartItem
{
    /**
     * @ORM\id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\cart
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Cart", inversedBy="cartItems")
     */
    protected $cart;

    /**
     * @ORM\product
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Product")
     */
    protected $product;

    /**
     * @ORM\quantity
     * @ORM\Column(type="integer")
     */
    protected $quantity;
}