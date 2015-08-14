<?php
/**
 * Created by PhpStorm.
 * User: Alexander
 * Date: 14.08.15
 * Time: 13:43
 */

namespace models\renders;

use models\shapes\Shape;

abstract class Render
{
    protected $shape;
    protected $context;

    public function __construct(Shape $shape)
    {
        $this->shape = $shape;
        $this->init();
    }

    abstract protected function init();

    abstract protected function renderBorderWidth();

    abstract protected function renderBorderColor();

    abstract protected function renderFillColor();

    abstract public function render();
}