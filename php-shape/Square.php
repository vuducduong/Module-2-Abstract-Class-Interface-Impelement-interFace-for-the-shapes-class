<?php
include_once ('Rectangle.php');

class Square extends Rectangle implements Resizeable
{
    public function resize($value)
    {
        parent::resize($value);
    }

    public function __construct($name, $width)
    {
        parent::__construct($name, $width, $width);
    }
}