<?php
include('header.php');
include('functions.php');
include('answers.php');

echo '<h1>Квадрат Пифагора</h1>';
echo '<form action="" name="searchform" method="get" role="form" class="form-inline">';
echo '<div class="form-group">';
echo "<input type='text' name='birthday' placeholder='Введите дату' class='form-control datapicker' value='{$_GET["birthday"]}' />";
echo '</div>';

echo '<button type="submit" class="btn btn-default">Отправить</button>';
echo '</form>';

if ($_GET["birthday"]!=""){
    include('pif_calc.php');
} else {
    echo '<br><br><br><br><br><br><br><br>';
}

include('footer.php');