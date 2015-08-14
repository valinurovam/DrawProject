<?php
/**
 * Created by PhpStorm.
 * User: Alexander
 * Date: 14.08.15
 * Time: 13:40
 */

namespace models\renders;

use DomainException;
use models\shapes\Shape;

class RenderFactory
{
    const TYPE_TEXT = 'Text';
    const TYPE_GD = 'GD';

    /**
     * Return render by shape and render-type
     *
     * @param $shape Shape
     * @param $type string
     *
     * @return Shape
     */
    public static function create(Shape $shape, $type = self::TYPE_TEXT)
    {
        $renderClass = __NAMESPACE__ . '\\' . 'Render' . $type . $shape->getClassName();
        if (class_exists($renderClass)) {
            return new $renderClass($shape);
        } else {
            throw new DomainException("Unknown render class: " . $renderClass);
        }
    }
}