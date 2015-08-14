<?php
/**
 * Created by PhpStorm.
 * User: Alexander
 * Date: 13.08.15
 * Time: 20:59
 */

namespace models\shapes;


class Circle extends Shape
{
    /**
     * @var double Radius
     */
    protected $radius;

    public function getRadius()
    {
        return $this->radius;
    }
}