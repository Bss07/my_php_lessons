<?php
$date = strtotime ($_GET["birthday"]);
$day = date('d', $date);
$month = date('m', $date);
$year = date('Y', $date);

$f1 = sumNumber($day . $month);
$f2 = sumNumber($year);
$first= $f1 + $f2;
$second= sumNumber($first);
$third= $first - firstNumber($day)*2;
$fourth= sumNumber($third);

$arr1= str_split($day.$month.$year);
$arr2= str_split($first.$second.$third.$fourth);
$res=array();
foreach ($arr1 as $i) {
    $res[$i].=$i;
}
foreach ($arr2 as $i) {
    $res[$i].=$i;
}

echo '<br>';
echo "Пример расчета: Дата рождения: ".date('d.m.Y', $date).'<br>';
echo "Складываем цифры дня - ".sumNumberExplained($day)." и месяца - ".sumNumberExplained($month)." рождения.<br>";
echo "Получим первое промежуточное число - $f1.<br>";
echo "Складываем цифры года рождения ".sumNumberExplained($year).'<br>';
echo "Складываем полученные цифры $f1 + $f2 = $first (первое рабочее число).<br>";
echo "Складываем цифры первого рабочего числа: ".sumNumberExplained($first)."
 (второе рабочее число).<br>";
echo "Из первого рабочего числа отнять удвоенную цифру дня рождения: $first - ".firstNumber($day)."*2.
 (третье рабочее число).<br>";
echo "Сложить цифры третьего рабочего числа:".sumNumberExplained($third)."(четвертое рабочее число).<br>";

for ($i = 1; $i <= 9; $i++) {
    if (empty($res[$i])) {
        echo $i.' &mdash; '. $answers[ $i."0" ].'<br>';
    } else {
        echo $i.' &mdash; '. $answers[ $res[$i] ].'<br>';
    }
}