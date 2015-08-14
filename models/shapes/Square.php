<?php
/**
 * Created by PhpStorm.
 * User: Alexander
 * Date: 13.08.15
 * Time: 20:59
 */

namespace models\shapes;

class Square extends Shape
{
    /**
     * @var double width
     */
    protected $width;

    /**
     * @var double height
     */
    protected $height;

    public function getWidth()
    {
        return $this->width;
    }

    public function getHeight()
    {
        return $this->height;
    }
}