<?php 
$a=5;
$A=3;

echo $a;
echo '<br>';
echo $A;
echo '<br>';
define('PI', 3.14);
echo PI;
echo '<br>';
$name='Quang Anh';
$name2='Gia Dat';
echo $name;
echo '<br>';
echo $name2;
echo '<br>';
$tong= $a + $A;
echo  "Tong:$tong <br>";
$hieu= $a - $A;
echo  "Hieu:$hieu <br>";
$tich= $a * $A;
echo  "Tich:$tich<br>";
$thuong= $a / $A;
echo  "Thuong:$thuong <br>";
echo '<br>';
$ssb=$A ==$a;
echo  "So sanh bang:$ssb <br>";
$ssk=$A !=$a;
echo  "So sanh khac:$ssk<br>";
$ssh=$A >$a;
echo  "So sanh hon:$ssh <br>";
echo '<br>';
$t=date('H');
if($t<'10'){
    echo 'Have a good morning';
}elseif($t<'20'){
    echo 'have a good day';
}else{
    echo'have a good night';
}
echo'<br>';
var_dump($t);
echo '<br>';
echo 'Giai phuong trinh bac nhat ax+b';
?>
