<?php

$w_conditions='Сонячний день'; 

if ($w_conditions == 'Сонячний день') {
    echo '<img scr="img/sunny.jfit" alt="sunnyday">\n';
}

elseif ($w_conditions == 'Дождь') {
    echo '<img scr="img/rainfall.jfit" alt="rainfall">\n';
} 

else {
    echo 'На даний час інші погодні умови'; 
}


?>