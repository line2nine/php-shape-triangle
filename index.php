<?php
include_once "class/Shape.php";
include_once "class/Triangle.php";

$triangle = new Triangle('Triangle 1', 'red', 3, 4, 5);
echo $triangle->__toString();