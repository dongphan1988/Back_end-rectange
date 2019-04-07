<?php

class Rectangle
{
    var $width;
    var $height;

    public function __construct($rectangle_width, $rectangle_height)
    {
        $this->width = $rectangle_width;
        $this->height = $rectangle_height;
    }

    function getArea()
    {
        return ( $this->width * $this->height);
    }

    function getPerimeter()
    {
        return (($this->width + $this->height) * 2);
    }
    function display()
    {
        return "Rectangle{" . "width=" . $this->width . ", height=" . $this->height . "}";
    }

}

?>