<?php

class Circle extends Figure
{

    private float|int $radius;

    /**
     * @param float|int $radius
     * @throws Exception
     */
    public function __construct(float|int $radius)
    {
        $this->setRadius($radius);
    }

    /**
     * @return float|int
     */
    #[\Override] public function area(): float|int
    {
        // TODO: Implement area() method.
        $radius = $this->getRadius();
        return $this->getArea($radius);
    }

    /**
     * @return float|int
     */
    #[\Override] public function perimeter(): float|int
    {
        // TODO: Implement perimeter() method.
        $radius = $this->getRadius();
        return $this->getPerimeter($radius);

    }

    /**
     * @param float|int $radius
     * @throws Exception
     */
    private function setRadius(float|int $radius): void
    {
        if ($radius <= 0) {
            throw new Exception('Invalid radius');
        }
        $this->radius = $radius;
    }

    /**
     * @return float|int
     */
    private function getRadius(): float|int
    {
        return $this->radius;
    }

    /**
     * @param float|int $radius
     * @return float|int
     */
    private function getPerimeter(float|int $radius): float|int
    {
        return 2 * pi() * $radius;
    }

    /**
     * @param float|int $radius
     * @return float|int
     */
    private function getArea(float|int $radius): float|int
    {
        return pi() * ($radius ** 2);
    }

}