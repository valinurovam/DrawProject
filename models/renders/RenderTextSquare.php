<?php
/**
 * Created by PhpStorm.
 * User: Alexander
 * Date: 14.08.15
 * Time: 13:51
 */

namespace models\renders;

/**
 * Class RenderTextSquare
 *
 * Render square like text
 *
 * @package models\renders
 */
class RenderTextSquare extends RenderText
{
    public function render()
    {
        parent::render();
        
        $this->context .= "Render Square with params: width - {$this->shape->getWidth()}, height - {$this->shape->getHeight()}!";
        echo $this->context;
    }
}