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


    /**
     * @return mixed
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * @param mixed $order
     */
    public function setOrder($order)
    {
        $this->order = $order;
    }

    /**
     * @return mixed
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * @param mixed $product
     */
    public function setProduct($product)
    {
        $this->product = $product;
    }

    /**
     * @return mixed
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param mixed $quantity
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }



}