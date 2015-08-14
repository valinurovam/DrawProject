<?php
/**
 * Created by PhpStorm.
 * User: Alexander
 * Date: 14.08.15
 * Time: 13:51
 */

namespace models\renders;

/**
 * Class RenderGDCircle
 *
 * Render circle through GD lib
 * @package models\renders
 */
class RenderGDCircle extends RenderText
{
    public function render()
    {
        parent::render();

        /*
         * resource $image = $this->context
         * bool imagefilledellipse ( resource $image , int $cx , int $cy , int $width , int $height , int $color )
         */
    }
}