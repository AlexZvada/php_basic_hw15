<?php

class Rectangle extends Figure
{
    private float|int $width;
    private float|int $height;


    /**
     * @param float|int $width
     * @param float|int $height
     * @throws Exception
     */
    public function __construct(float|int $width, float|int $height)
    {
        if ($round){

        }
        $this->setWidth($width);
        $this->setHeight($height);
    }

    /**
     * @return float|int
     */
    public function area(): float|int
    {
        // TODO: Implement area() method.
        $width = $this->getWidth();
        $height = $this->getHeight();
        return $this->getArea($width, $height);

    }

    /**
     * @return float|int
     */
    public function perimeter(): float|int
    {
        // TODO: Implement perimeter() method.
        $width = $this->getWidth();
        $height = $this->getHeight();
        return $this->getPerimeter($width, $height);
    }

    /**
     * @param float|int $width
     * @return void
     * @throws Exception
     */
    private function setWidth(float|int $width): void
    {
        if ($width<=0){
            throw new Exception('Invalid width');
        }
        $this->width = $width;
    }

    /**
     * @param float|int $height
     * @return void
     * @throws Exception
     */
    private function setHeight(float|int $height): void
    {
        if ($height<=0){
            throw new Exception('Invalid height');
        }
        $this->height = $height;
    }

    /**
     * @return float|int
     */
    private function getWidth(): float|int
    {
        return $this->width;
    }

    /**
     * @return float|int
     */
    private function getHeight(): float|int
    {
        return $this->height;
    }

    /**
     * @param float|int $width
     * @param float|int $height
     * @return float|int
     */
    private function getArea(float|int $width, float|int $height):float|int
    {
        return $width * $height;
    }

    /**
     * @param float|int $width
     * @param float|int $height
     * @return float|int
     */
    private function getPerimeter(float|int $width, float|int $height):float|int
    {
        return 2*($height + $width);
    }


}