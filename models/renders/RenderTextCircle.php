<?php
/**
 * Created by PhpStorm.
 * User: Alexander
 * Date: 14.08.15
 * Time: 13:51
 */

namespace models\renders;

/**
 * Class RenderTextCircle
 *
 * Render circle like text
 * @package models\renders
 */
class RenderTextCircle extends RenderText
{
    public function render()
    {
        parent::render();

        $this->context .= "Render Circle with radius: {$this->shape->getRadius()}!";
        echo $this->context;
    }
}