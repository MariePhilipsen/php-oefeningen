<?php

final class Point
{
    private $x;
    private $y;

    // static variabelen en methoden aanroepen met self::

    private static $count = 0;

    //magic method beginnen steeds met __
    public function __construct($x,$y)
    {
        $this ->x = $x;
        $this ->y = $y;
        self::$count++;
    }

    public function __destruct()
    {
        self::$count--;
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

    public static function getCount(){
        return self::$count;
    }
}