<?php
/**
 * Created by PhpStorm.
 * User: Alexander
 * Date: 14.08.15
 * Time: 13:51
 */

namespace models\renders;

/**
 * Class RenderGD
 *
 * Render shapes like image through GD lib
 * @package models\renders
 */
abstract class RenderGD extends Render
{
    public function render()
    {
        $this->renderBorderWidth();
        $this->renderBorderColor();
        $this->renderFillColor();
    }

    protected function renderBorderWidth()
    {
        imagesetthickness($this->context, $this->shape->getBorderWidth());
    }

    protected function renderBorderColor()
    {
        /*
         * GD lib logic
         */
    }

    protected function renderFillColor()
    {
        /*
         * GD lib logic
         */
    }

    protected function init()
    {
        /**
         * @todo how to set image width and height?
         */
        $this->context = imagecreatetruecolor(100, 100);
        /**
         * some init code
         */
    }
}