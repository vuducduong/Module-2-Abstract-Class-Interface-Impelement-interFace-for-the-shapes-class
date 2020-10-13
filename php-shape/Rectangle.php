<?php

class Rectangle extends Shape implements Resizeable
{
    public $width;
    public $height;

    public function __construct($name, $width, $height)
    {

        parent::__construct($name);
        $this->width = $width;
        $this->height = $height;
    }
    public function resize($value)
    {
        $this->width+=($this->width*0.01*$value);
        $this->height+=($this->height*0.01*$value);

    }

    public function calculateArea(){
        return $this->height * $this->width;
    }

    public function calculatePerimeter(){
        return ($this->height + $this->width) * 2;
    }
}