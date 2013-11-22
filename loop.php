<?
$a = array(20,25,24,23,22, 21, 20, 190);
$b = array("name" => 'Vasya', 'surname' => 'Pupkin');

/*
echo $a[0]."<br>";
echo $a[1]."<br>";
echo $a[2]."<br>";
echo $a[3]."<br>";
echo $a[4]."<br>";
*/
/*
for ($i = 0; $i < count($a); $i++) {
    echo $i." - ".$a[$i]."<br>";
}
*/

/*
$i=0;
while ($i < count($a)) {
    echo $i." - ".$a[$i]."<br>";
    $i++;
}
*/

/*
foreach ($b as $k => $v){
    echo "$k, $v<br>";
}
*/


/*
$res = $a[0];
$index = 0;
foreach ($a as $k => $v) {
    if ($res <= $v) {
        $res = $v;
    }
}

echo "max value - $res<br>";
echo "max index - $index<br>";
echo "max value - ".max($a)."<br>";
*/


$m = array(
    array(1,2,3),
    array(4,5,6),
    array(7,8,9),
);

#print_r($a);
#print_r($m);

function printMatrix($m){
    foreach ($m as $rowNum => $row){
        foreach ($row as $colNum => $cellValue) {
            echo "$cellValue, ";
        }
        echo "<br>";
    }
}

//printMatrix($m);



function GenArray($width, $height) {
    $res = array ();
    $c = $width*$height;
    for ($x=0; $x < $width; $x++) {
        for ($y=0; $y < $height; $y++){
            $res[$x][$y] = $c;
            $c--;
        }
    }
    return $res;
}

$q = GenArray(10, 10);

printMatrix($q);