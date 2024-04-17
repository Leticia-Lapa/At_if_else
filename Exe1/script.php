<?php

$temp = $_POST['temp'];

if($temp < 0){

    echo "Está Congelando!";
}
elseif($temp>=0 && $temp<15)
{

    echo"Está Muito Frio!";
}
elseif($temp>=15 && $temp<25)
{

    echo"A Temperatura está Razoavel";
}
elseif($temp>=25)
{

    echo "Está Calor";
}


?>