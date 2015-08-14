<?php
/**
 * Created by PhpStorm.
 * User: Alexander
 * Date: 14.08.15
 * Time: 13:59
 */

namespace models;


abstract class Model
{
    public function getClassName()
    {
        $classWithNamespace = get_called_class();
        $tmp = explode('\\', $classWithNamespace);
        return end($tmp);
    }
}