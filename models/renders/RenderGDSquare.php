<?php
/**
 * Created by PhpStorm.
 * User: Alexander
 * Date: 14.08.15
 * Time: 13:51
 */

namespace models\renders;

/**
 * Class RenderGDSquare
 *
 * Render square through GD lib
 *
 * @package models\renders
 */
class RenderGDSquare extends RenderText
{
    public function render()
    {
        parent::render();
        
        /**
         * resource $image = $this->context
         * bool imagefilledrectangle ( resource $image , int $x1 , int $y1 , int $x2 , int $y2 , int $color )
         */
    }
}