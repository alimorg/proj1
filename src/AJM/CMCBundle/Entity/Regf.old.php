<?php

namespace AJM\CMCBundle\Entity;


class Regf
{
protected $HowMany;

protected $whereByTo;

public function getHowMany()
{
return $this->HowMany;
}

public function setHowMany($HowMany)
{
$this->HowMany = $HowMany;
}

public function getwhereByTo()
{
return $this->whereByTo;
}

public function setwhereByTo($whereByTo)
{
$this->whereByTo = $whereByTo;
}
}