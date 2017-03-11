<?php
/**
 * Created by PhpStorm.
 * User: piotr
 * Date: 10.03.17
 * Time: 20:30
 */

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Cart
 *
 * @ORM\Table(name="cart")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\cartRepository")
 */
class Cart
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\User", inversedBy="cart")
     */
    protected $user;

    /**
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\CartItem", mappedBy="cart")
     */
    protected $cartItems;

    public function __construct()
    {
        $this->cartItems = new ArrayCollection();
    }

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
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param mixed $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }

    /**
     * @return mixed
     */
    public function getCartItems()
    {
        return $this->cartItems;
    }

    /**
     * @param mixed $cartItems
     */
    public function setCartItems($cartItems)
    {
        $this->cartItems = $cartItems;
    }



}