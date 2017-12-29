<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;


/**
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PcRepository")
 * @ORM\Table(name="computer")
 */
class Pc
{





    /**
     * @ORM\Id
     * @ORM\Column(type="integer", nullable=false)
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;


    /**
     * @ORM\Column(type="integer")
     */
    protected $code;

    /**
     * @ORM\ManyToOne(targetEntity="Product", fetch="EAGER")
     * @ORM\JoinColumn(name="product_id", referencedColumnName="id")
     */
    protected $model;

    /**
     * @ORM\Column(type="integer")
     */
    protected $speed;


    /**
     * @ORM\Column(type="integer")
     */
    protected $ram;


    /**
     * @ORM\Column(type="decimal", precision=5, scale=1)
     */
    protected $hd;


    /**
     * @ORM\Column(type="string")
     */
    protected $cd;


    /**
     * @ORM\Column(type="float")
     */
    protected $price;

    /**
     * @return mixed
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @param mixed $model
     */
    public function setModel($model)
    {
        $this->model = $model;
    }

    /**
     * @return mixed
     */
    public function getSpeed()
    {
        return $this->speed;
    }

    /**
     * @param mixed $speed
     */
    public function setSpeed($speed)
    {
        $this->speed = $speed;
    }

    /**
     * @return mixed
     */
    public function getRam()
    {
        return $this->ram;
    }

    /**
     * @param mixed $ram
     */
    public function setRam($ram)
    {
        $this->ram = $ram;
    }

    /**
     * @return mixed
     */
    public function getHd()
    {
        return $this->hd;
    }

    /**
     * @param mixed $hd
     */
    public function setHd($hd)
    {
        $this->hd = $hd;
    }

    /**
     * @return mixed
     */
    public function getCd()
    {
        return $this->cd;
    }

    /**
     * @param mixed $cd
     */
    public function setCd($cd)
    {
        $this->cd = $cd;
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
    public function getId()
    {
        return $this->id;
    }


}