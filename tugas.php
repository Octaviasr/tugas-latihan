<?php
echo "latihan 1</br>";
$a = 80;
$b = 81;

if($a%2==0){
    echo $a." = genap</br>";
}else{
    echo $a." = ganjil</br>";
}
if($b%2==0){
    echo $b." = genap</br>";
}else{
    echo $b." = ganjil</br>";
}

echo "latihan 2</br>";
$a = 11;
$b = 10;

if($a > $b){
    echo "a lebih besar daripada b </br>";
}else{
    echo "a lebih kecil darpada b <br>";
}
if ($a == $b) {
    echo "a sama besar dengan b </br>";
}

echo "latihan 3</br>";

$username3 = "admin";
$password3 = "qwerty";

if($username3!="admin" or $password3!="qwerty"){
    echo "username dan password tidak sesuai";
}else{
    echo "username atau password sesuai, hak akses diberikan</br>";
}
echo "latihan 4</br>";

$username1= "admin";
$password1 = "qwerty";

$datausername1 = "admin";
$datapassword1 = "qwerty";

if($username1 == $datausername1 && $password1 == $datapassword1){
    echo "username dan password sesuai,hak akses diberikan";
} elseif ($username1!=$datausername1 && $password1!=$datapassword1){
    echo "username dan password tidak sesuai";
} 
if ($username1!=$datausername1 && $password1==$datapassword1){
    echo "username tidak sesuai,password sesuai";
} elseif  ($username1==$datausername1&& $password1!=$datapassword1){
    echo "username sesuai,password tidak sesuai";
} 

?>

