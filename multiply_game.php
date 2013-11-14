<?php
//
//всегда отображать кнопку сброса
//сделать действие начинающее игру
//отображать счет
session_start();
include('header.php');
const A_NEW_GAME = 1;
const A_ASSUMPTION = 2;
const S_NO_ANSWER = 1;
const S_CORRECT_ANSWER = 2;
const S_INCORRECT_ANSWER = 3;

function rememberNewNumbers(){
    $_SESSION['number1'] = rand(1, 10);
    $_SESSION['number2'] = rand(1, 10);
}
function resetScore(){
    $_SESSION['winScore'] = 0;
    $_SESSION['loseScore'] = 0;
    $_SESSION['startTime'] = time();
}
function secondsToStr($seconds){
    $hours = floor($seconds/3600);
    $seconds = $seconds - $hours*3600;
    $minutes = floor($seconds/60);
    $seconds = $seconds - $minutes*60;
    if ($seconds<10) $seconds = '0'.$seconds;
    if ($minutes<10) $minutes = '0'.$minutes;
    if ($hours<10) $hours = '0'.$hours;
    return "$hours:$minutes:$seconds";
}

$action = $_GET['action'];
$assumption = $_GET['assumption'];
$status = S_NO_ANSWER;
empty($_SESSION['number1']);

if ($action == A_NEW_GAME) {
    rememberNewNumbers();
    resetScore();
}

$answer = $_SESSION['number1'] * $_SESSION['number2'];
if ($action == A_ASSUMPTION) {
            if ($assumption == $answer) {
                $status = S_CORRECT_ANSWER;
                rememberNewNumbers();
                $_SESSION['winScore']++;
    }else {
        $status = S_INCORRECT_ANSWER;
        $_SESSION['loseScore']++;
    }
}


//Представление
echo '<h1>Решите задачу</h1>';

if ($status == S_CORRECT_ANSWER){
    echo '<div class="alert alert-success">Поздравляем! Верный ответ!</div>';
}
if ($status == S_INCORRECT_ANSWER){
    echo '<div class="alert alert-info">Ответ неверен!</div>';
}

echo '<span class="badge badge-success">Правильных ответов: '.$_SESSION['winScore'].'</span>';
echo '<span class="badge badge-important">Неправильных ответов: '.$_SESSION['loseScore'].'</span>';
$t = time() - $_SESSION['startTime'];
echo '<span class="badge badge-important">Прошло времени: '.secondsToStr($t).'</span>';

echo '<br>';

if (!empty($_SESSION['number1'])){
    echo "Сколько будет {$_SESSION['number1']} умножить на {$_SESSION['number2']} ?";
}

echo '<form action="" name="searchform" method="get" role="form" class="form-inline">';


if (empty($_SESSION['number1'])){
    echo '<button type="submit" class="btn btn-primary" name="action" value='.A_NEW_GAME.'>Начать</button>';
} else {
    echo "<input type='text' name='assumption' placeholder='Введите число' class='form-control' value='' />";
    echo '<button type="submit" class="btn btn-primary" name="action" value='.A_ASSUMPTION.'>Ответить</button>';

    echo '<button type="submit" class="btn btn-danger" name="action" value='.A_NEW_GAME.'>Сбросить</button>';
}

echo '</form>';

include('footer.php');