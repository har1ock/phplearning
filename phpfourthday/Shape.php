
<?php

abstract class Shape {

    abstract public function area() : float;
}     
    
class Rectangle extends Shape{
    private float $height;
    private float $width;

    public function __construct($height, $width)
    {
        $this->setHeight($height);
        $this->setWidth($width);
    }
    
    public function setHeight(float $height): void{
        if($height <= 0){
            throw new InvalidArgumentException(
                "Задайта правильну висоту, більше 0");
        }
        $this->height = $height;
    }
    
    public function setWidth($width): void{
        if($width <= 0){
            throw new InvalidArgumentException(
                "Задайта правильну ширину, більше 0");
            }
        $this->width = $width;
    }

    public function area(): float{
        return $this->width * $this->height;
    }    
}

class Triangle extends Shape{
    private float $height;
    private float $base;

    public function __construct($height, $base)
    {
        $this->setHeight($height);
        $this->setBase($base);
    }
    
    public function setHeight(float $height): void{
        if($height <= 0){
            throw new InvalidArgumentException(
                "Задайта правильну висоту, більше 0");
        }
        $this->height = $height;
    }
    
    public function setBase($base): void{
        if($base <= 0){
            throw new InvalidArgumentException(
                "Задайта правильну базу, більше 0");
            }
        $this->base = $base;
    }

    public function area(): float{
        return $this->base * $this->height * 0.5;
    }    
}
?>