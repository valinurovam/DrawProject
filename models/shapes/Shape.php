<?php
/**
 * Created by PhpStorm.
 * User: Alexander
 * Date: 13.08.15
 * Time: 19:35
 */

namespace models\shapes;

use models\Model;

abstract class Shape extends Model
{
    protected $fillColor;
    protected $borderColor;
    protected $borderWidth;

    public function __construct($params = [])
    {
        $this->setParams($params);
    }

    private final function setParams($params)
    {
        foreach ($params as $name => $value) {
            $this->{$name} = $value;
        }
    }

    public function getFillColor()
    {
        return $this->fillColor;
    }

    public function getBorderColor()
    {
        return $this->borderColor;
    }

    public function getBorderWidth()
    {
        return $this->borderWidth;
    }
}