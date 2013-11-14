<?php

session_start();
$step= $_GET['step'];
$assumption= $_GET ['assumption'];
if ($step=='') $newStep=1; else $newStep= $step+1;
if ($step==1){ //загадываем число
    $_SESSION['answer']= rand(1,100);
}
include('header.php');

echo '<h1>Угадай число</h1>';

//echo 'Загадано: '.$_SESSION['answer'].'<br>';

if ($step>1){
    echo 'Вы ввели - '.$assumption.'<br>';
    echo 'Ваша попытка №'.($step-1).'<br>';
    $isEnd= false;
    if ($assumption > $_SESSION['answer'] ){
        echo 'Ваше число больше, чем загаданное';
    }
    if ($assumption == $_SESSION['answer']){
        echo 'Верно!';
        $isEnd= true;
        $newStep= 1;
    }
    if ($assumption < $_SESSION['answer']){
        echo 'Ваше число меньше, чем загаданое';
    }
}

echo '<form action="" name="searchform" method="get" role="form" class="form-inline">';
echo "<input type='hidden' name='step' value='$newStep' />";

echo '<div class="form-group">';

//(1!='' && true==false) -> true && false -> false
//(2!='' && true==true) -> true && true -> true

if ($step!='' && false==$isEnd){
    echo "<input type='text' name='assumption' placeholder='Введите число' class='form-control' value='{$_GET["birthday"]}' />";
}

echo '</div>';

if ($step!='' && false==$isEnd){
    $label='Отправить';
} else {
    $label='Начать игру';
}
echo '<button type="submit" class="btn btn-default">'.$label.'</button>';
echo '</form>';


include('footer.php');