<?php
$a='Satish ';
//md5
//One Way Farmat only Encript
$c=md5($a);
$s=sha1($a);
echo $c."<br/>";
echo $s."</br>";
// 2 way Farmat Encript/Dencript
//encode
$ab="satish";
$ab_en=base64_encode($ab);
echo $ab_en."</br>";
//decode
$ab_de=base64_decode($ab_en);
echo $ab_de;
?>
