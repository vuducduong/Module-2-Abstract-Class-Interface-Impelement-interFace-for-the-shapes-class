<?php
class Circle extends Shape implements Resizeable
{
    public $radius;

    public function __construct($name, $radius)
    {
        parent::__construct($name);
        $this->radius = $radius;
    }
    public function resize($value)
    {
        $this->radius+=($this->radius*$value*0.01);
    }

    public function calculateArea(){
        return pi() * pow($this->radius, 2);
    }

    public function calculatePerimeter(){
        return pi() * $this->radius * 2;
    }
}