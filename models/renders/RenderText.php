<?php
/**
 * Created by PhpStorm.
 * User: Alexander
 * Date: 14.08.15
 * Time: 13:51
 */

namespace models\renders;

/**
 * Class RenderText
 *
 * Render shapes like text
 * @package models\renders
 */
abstract class RenderText extends Render
{
    public function render()
    {
        $this->renderBorderWidth();
        $this->renderBorderColor();
        $this->renderFillColor();
    }

    protected function renderBorderWidth()
    {
        $this->context .= "Render border width: {$this->shape->getBorderWidth()}!";
    }

    protected function renderBorderColor()
    {
        $this->context .= "Render border color: {$this->shape->getBorderColor()}!";
    }

    protected function renderFillColor()
    {
        $this->context .= "Render fill color: {$this->shape->getFillColor()}!";
    }

    protected function init()
    {
        $this->context = '';
    }
}