<?php

namespace AJM\CMCBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Regf
 */
class Regf
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $howMany;

    /**
     * @var string
     */
    private $whereByTo;


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
     * Set howMany
     *
     * @param string $howMany
     * @return Regf
     */
    public function setHowMany($howMany)
    {
        $this->howMany = $howMany;

        return $this;
    }

    /**
     * Get howMany
     *
     * @return string 
     */
    public function getHowMany()
    {
        return $this->howMany;
    }

    /**
     * Set whereByTo
     *
     * @param string $whereByTo
     * @return Regf
     */
    public function setWhereByTo($whereByTo)
    {
        $this->whereByTo = $whereByTo;

        return $this;
    }

    /**
     * Get whereByTo
     *
     * @return string 
     */
    public function getWhereByTo()
    {
        return $this->whereByTo;
    }
}
