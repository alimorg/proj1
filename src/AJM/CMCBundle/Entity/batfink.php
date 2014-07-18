<?php

namespace AJM\CMCBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * batfink
 */
class batfink
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $yellowPinkie;

    /**
     * @var string
     */
    private $wingsShield;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set yellowPinkie
     *
     * @param string $yellowPinkie
     * @return batfink
     */
    public function setYellowPinkie($yellowPinkie)
    {
        $this->yellowPinkie = $yellowPinkie;

        return $this;
    }

    /**
     * Get yellowPinkie
     *
     * @return string 
     */
    public function getYellowPinkie()
    {
        return $this->yellowPinkie;
    }

    /**
     * Set wingsShield
     *
     * @param string $wingsShield
     * @return batfink
     */
    public function setWingsShield($wingsShield)
    {
        $this->wingsShield = $wingsShield;

        return $this;
    }

    /**
     * Get wingsShield
     *
     * @return string 
     */
    public function getWingsShield()
    {
        return $this->wingsShield;
    }
}
