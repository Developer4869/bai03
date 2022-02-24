<?php
$a = 5;
$A = 3;

echo $a;
echo '<br>';
echo $A;
echo '<br>';
define('PI', 3.14);
echo PI;
echo '<br>';
$name = 'Quang Anh';
$name2 = 'Gia Dat';
echo $name;
echo '<br>';
echo $name2;
echo '<br>';
$tong = $a + $A;
echo  "Tong:$tong <br>";
$hieu = $a - $A;
echo  "Hieu:$hieu <br>";
$tich = $a * $A;
echo  "Tich:$tich<br>";
$thuong = $a / $A;
echo  "Thuong:$thuong <br>";
echo '<br>';
$ssb = $A == $a;
echo  "So sanh bang:$ssb <br>";
$ssk = $A != $a;
echo  "So sanh khac:$ssk<br>";
$ssh = $A > $a;
echo  "So sanh hon:$ssh <br>";
echo '<br>';
$t = date('H');
if ($t < '10') {
    echo 'Have a good morning';
} elseif ($t < '20') {
    echo 'have a good day';
} else {
    echo 'have a good night';
}
echo '<br>';
var_dump($t);
echo '<br>';
echo 'Giai phuong trinh bac nhat ax+b = 0 ';
$n = 5;
switch ($n) {
    case 2:
        echo ' thu 2';
        break;
    case 3:
        echo ' thu 3';
        break;
    case 4:
        echo ' thu 4';
        break;
    case 5:
        echo ' thu 5';
        break;
    case 6:
        echo ' thu 6';
        break;
    case 7:
        echo ' thu 7';
        break;
    default:
        echo 'Khong phai ngay trong tuan';
}
//Tinh tong tu 1 den 100 
$i = 0;
$tong = 0;
while ($i <= 100) {
    $i++;
    if ($i > 50)
        continue;
    $tong += $i;
}
echo "tong : $tong ";
echo "i: $i <br>";
 $tr = 0;
for($b = 0; $b <= 100; $b++) {
    $tr += $b;
}
echo" Tong: $tr <br>";
$numbers = array(1, 2, 3, 4, 5);

foreach ($numbers as $value) {
    echo "Value is $value <br />";
}

$numbers[0] = "one";
$numbers[1] = "two";
$numbers[2] = "three";
$numbers[3] = "four";
$numbers[4] = "five";

foreach ($numbers as $value) {
    echo "Value is $value <br />";
}
?>
<?php
$salaries = array(
    "mohammad" => 2000,
    "qadir" => 1000,
    "zaria" => 500,
);
echo "salary of mohammad is " . $salaries['mohammad'] . '<br/>';
?>
<?php
$marks = array(
    "mohammad" => array(
        "physics" => 35,
        "maths" => 30,
        "chemistry" => 39,
    ),
    "qadir" => array(
        "physics" => 30,
        "maths" => 32,
        "chemistry" => 29,
    ),
    "zara" => array(
        "physics" => 31,
        "maths" => 22,
        "chemistry" => 39,
    ),
);
echo "Marks for mohammad in physics : ";
echo $marks['mohammad']['physics'] . "<br/>";
?>
<br><?php
$array = array(
    'amzuni.com',
    'website hoc lap trinh online',

);
print_r(array_pop($array));
?>
<br><?php
$array = [5,4,3,2,1];
sort($array);
print_r($array);
function tong($a, $b){
    return $a + $b;
}
$m= 9;
$n=6;
$t = tong($m, $n);
echo "Tong: $t"
?>
<br><?php
function hello($message){
    echo 'wellcome' . $message;
}
hello(' PHP');
?>
<br><?php
function setName($name = 'noname'){
    echo $name;
}
setName('PHP');
echo'<br>';
setName();
?>
<br><?php
function setValue($a){
    $a = 10;
}
$b = 5;
setValue($b);
echo $b;