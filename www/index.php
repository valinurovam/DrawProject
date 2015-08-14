<?php
/**
 * Created by PhpStorm.
 * User: Alexander
 * Date: 13.08.15
 * Time: 21:12
 */

require __DIR__ . '/../vendor/autoload.php';

use models\renders\RenderFactory;
use models\shapes\ShapeFactory;


//$shapes = json_decode($_REQUEST['shapes']);
$shapes = [
    [
        'type' => 'circle',
        'params' =>
            [
                'radius' => 10,
                'fillColor' => '#ccc',
                'borderColor' => '#aaa',
                'borderWidth' => '2'
            ]
    ],
    [
        'type' => 'square',
        'params' =>
            [
                'width' => 20,
                'height' => 30,
                'fillColor' => '#aaa',
                'borderColor' => '#ccc',
                'borderWidth' => '3'
            ]
    ],
];

foreach ($shapes as $userShape) {
    /**
     * @var \models\shapes\Shape $shape
     */
    $shape = ShapeFactory::create($userShape['type'], $userShape['params']);
    /**
     * @var \models\renders\Render $render
     */
    $render = RenderFactory::create($shape, RenderFactory::TYPE_TEXT);
    $render->render();
    echo PHP_EOL;
}