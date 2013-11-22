<?php
//определение массива
$a = array(); //пустой
$b = array(10, 20, 30); //числовой
$c = array("name" => 'Vasya', 'surname' => 'Pupkin'); //ассоциативный (хеш-массив)
//Обращение к массиву
echo $b[0]; // 10
echo $b[1]; // 20
echo $b[2]; // 30
//длинна массива
echo count($a); //0
echo count($b); //3

//Обращение к ассоциативному массиву
echo $c['name']; //Vasya
echo $c['surname']; //Pupkin
echo $c[0]; //null
//длинна массива
echo count($c); //2


