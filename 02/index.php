<?php
error_reporting();
require_once 'classes/Car.php';

function debug($var){
    echo '<pre>' . print_r($var) . '</pre>';
}

// создаем объекст
$car1 = new Car();
$car2 = new Car();

//debug($car1);

$car1->color = 'Черный';
$car1->brand = 'volvo';


$car2->color = 'белый';
$car2->brand = 'бмв';
$car2->speed = 200;
$car2->year = 2017;

//debug($car1);

echo "<h3>О моем авто:</h3> "
. "Марка: {$car1->brand}<br>"
        . "Цвет: {$car1->color}<br>"
        . "Кол-во колес:{$car1->wheels}<br>"
        . "Год выпуска:{$car2->year}<br>"
        . "Скорость:{$car2->speed}";
