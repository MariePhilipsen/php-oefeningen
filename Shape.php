<?php

//implements Drawable, maar hier moet je nog niet abstracte methode draw() te implementeren aangezien deze klasse abstract is
abstract class Shape implements Drawable
{
    private $point;

    public function __construct($point)
    {
        $this->point = $point;
    }

    function __toString()
    {
        return $this->point->__toString();
    }

    //abracte methode, hier geen implementatie nodig, implementatie is afhankelijk van welke soort shape...
    // implementatie in overervende klasse

    public abstract function caluclatePerimeter();
}