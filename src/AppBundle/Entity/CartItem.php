<?php
/**
 * Created by PhpStorm.
 * User: piotr
 * Date: 10.03.17
 * Time: 21:26
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
 * CartItem
 *
 * @ORM\Table(name="cartItem")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\cartItemRepository")
 */
class CartItem
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="Order", inversedBy="cartItems")
     */
    protected $order;

    /**
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Product")
     */
    protected $product;

    /**
     * @ORM\Column(type="integer")
     */
    protected $quantity;
}