<?php
include('header.php');

echo '<h1>Решение квадратных уравнений</h1>';

echo 'Введите ваши значения a, b, c';

echo '<form action="" name="searchform" method="get" role="form" class="form-inline">';

echo '<div class="form-group">';
echo "<input type='text' placeholder='a' name='a' size='3'> x<sup>2</sup>+";
echo "<input type='text' placeholder='b' name='b' size='3'> x+";
echo "<input type='text' placeholder='c' name='c' size='3'> =0";
echo '</div>';

echo '<button type="submit" class="btn btn-default">Посчитать</button>';
echo '</form>';

$a = $_GET['a'];
$b = $_GET['b'];
$c = $_GET['c'];
$D = null;

if ($a!=null || $a!=0) {

$D=$b*$b-4*$a*$c;

if ($D>0) {
    $x1 = (-1*$b-sqrt($D))/2*$a;
    $x2 = (-1*$b+sqrt($D))/2*$a;
    }

if ($D==0) {
    $x1 = $x2 = (-1*$b)/2*$a;
    }

if ($D<0) {
    $x1 = null;
    }


if ($x1 == null) {
    echo 'Корни не вещественные';
}
}

echo "<br>";

echo "Дискриминант равен = $D <br>";
echo "x<sub>1</sub> = $x1 <br>";
echo "x<sub>2</sub> = $x2 <br>";

include('footer.php');