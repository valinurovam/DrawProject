<?php
/**
 * Created by PhpStorm.
 * User: Alexander
 * Date: 13.08.15
 * Time: 21:02
 */

namespace models\shapes;

use DomainException;

class ShapeFactory
{
    /**
     * Return shape by type
     *
     * @param $type string
     * @param $params array
     *
     * @return Shape
     */
    public static function create($type, $params)
    {
        $shapeClass = __NAMESPACE__ . '\\' . ucfirst($type);
        if (class_exists($shapeClass)) {
            return new $shapeClass($params);
        } else {
            throw new DomainException("Unknown shape type: " . $shapeClass);
        }
    }
}