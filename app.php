<?php

require_once "Point.php";

$point1 = new Point(1,2);
print("$point1\n");

$point2 = new Point(5,11);
print($point2.PHP_EOL);

$distance = $point1->calculateDistance($point2);
print($distance.PHP_EOL);

// static method wordt opgeroepen op klasse (Point) gevolgd door ::
print("aantal aangemaakte Point-objecten:".Point::getCount().PHP_EOL);

unset($point1);

print("aantal aangemaakte Point-objecten:".Point::getCount());
