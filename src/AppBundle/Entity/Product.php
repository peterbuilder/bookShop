<?php
/**
 * Created by PhpStorm.
 * User: piotr
 * Date: 10.03.17
 * Time: 21:17
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

class Product
{
    /**
     * @ORM\id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\name
     * @ORM\Column(type="string")
     */
    protected $name;

    /**
     * @ORM\category
     * @ORM\Column(type="string")
     */
    protected $category;

    /**
     * @ORM\price
     * @ORM\Column(type="float")
     */
    protected $price;

    /**
     * @ORM\quantity
     * @ORM\Column(type="integer")
     */
    protected $quantity;

    /**
     * @ORM\cartItem
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\CartItem", inversedBy="product")
     */
    protected $cartItem;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param mixed $category
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
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

    /**
     * @return mixed
     */
    public function getCartItem()
    {
        return $this->cartItem;
    }

    /**
     * @param mixed $cartItem
     */
    public function setCartItem($cartItem)
    {
        $this->cartItem = $cartItem;
    }

}