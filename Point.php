<?php

final class Point
{
    private $x;
    private $y;

    public function __construct($x,$y)
    {
        $this ->x = $x;
        $this ->y = $y;
    }

    function __toString()
    {
        return "($this->x, $this->y)";
    }

    public function calculateDistance(Point $point)
    {
        return sqrt(($this->x -$point->x)*($this->x - $point->x)+
            ($this->y -$point->y)*($this->y - $point->y));
    }
}