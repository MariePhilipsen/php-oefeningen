<?php

//in deze klasse moet ook abstracte methode draw() van interface geïmplementeerd worden - dit omdat klasse Shape abstract is
final class Rectangle extends Shape
{
    private $width;
    private $height;

//basisklasse aanroepen met parent::

    public function __construct($point, $width, $height)
    {
        parent::__construct($point);
        $this->width = $width;
        $this->height = $height;
    }

//verplichte implementatie van deze abstracte methode
    public function caluclatePerimeter()
    {
        return 2*$this->width + 2*$this->height;
    }

    public function __toString()
    {
       return "Rectangle, Point=".parent::__toString()."width = $this->width height = $this->height";
    }

//verplichte implementatie van deze abstracte methode
    public function draw()
    {
        print($this->__toString());
    }
}