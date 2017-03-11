<?php
/**
 * Created by PhpStorm.
 * User: piotr
 * Date: 10.03.17
 * Time: 20:49
 */

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Order
 * @ORM\Entity(repositoryClass="AppBundle\Repository\orderRepository")
 * @ORM\Table(name="order")
 *
 */
class Order
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User", inversedBy="orders")
     */
    protected $user;

    /**
     *
     */
    protected $cartItems;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $date;

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

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }



}