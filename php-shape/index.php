<?php
include_once ("Resizeable.php");
include_once ("Shape.php");
include_once ('Circle.php');
include_once ('Cylinder.php');
include_once ('Rectangle.php');
include_once ('Square.php');

$shapes[0]= new Circle("Circle 01",4);
$shapes[1]= new Rectangle("Rectangle 02",6,7);
$shapes[2]= new Square("Square 01",5,5);
foreach ($shapes as $shape){
    echo "Shape before :".$shape->calculateArea()."<br>";
    $shape->resize(6);
    echo "Shape after :".$shape->calculateArea()."<br>";
}


