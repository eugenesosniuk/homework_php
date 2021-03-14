<?php

$vasya_ap = 11; // Кількість яблок 
$petya_ap = 22; 
$masha_ap = 33;
$vasya_img = '<img src="img/vasya.jpg" alt="vasya">'; // Фото персон 
$petya_img = '<img src="img/perya.jfif" alt="petya">';
$masha_img = '<img src="img/masha.png" alt="masha">';

if ($vasya_ap > $petya_ap && $vasya_ap > $masha_ap){     
    echo $vasya_img;
}

elseif ($petya_ap > $vasya_ap && $petya_ap > $masha_ap){
    echo $petya_img;
}

elseif ($masha_ap > $petya_ap && $masha_ap > $vasya_ap) {
    echo $masha_img;
}

echo "Порівну або не визначено";

?>