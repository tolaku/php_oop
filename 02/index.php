<?php
/**
 * включаем показ ошибок
 */
error_reporting();

require_once 'classes/Car.php';

function debug($var){
    echo '<pre>'. print_r($var, 1) .'</pre>';
}

// создаем объект
$car1 = new Car();
debug($car1); 
debug($car2); 

// обращаемся к свойству класса
$car1->color = 'Черный';
$car1->brand = 'Вольво';
$car1->year = '2012';


// обращаемся к свойству класса
$car1->color = 'Белый';
$car1->brand = 'БМВ';
$car1->speed = '200';

//debug($car1);
debug($car2);

echo "<h3>О моем авто:</h3>
Марка: {$car1->brand}<br>
Цвет: {$car1->color}<br>
Кол-во колес: {$car1->wheels}<br>
Год выпуска: {$car1->year}<br>
Скорость: {$car1->speed}<br>
";