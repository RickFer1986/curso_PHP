<div class="titulo">If Else</div>

<?php

if(true){
    echo "Serei impresso?<br>";
}

// Retirna False
if(""){
    echo "Serei impresso?<br>";
}

// Retirna True
if(" "){
    echo "Serei impresso?<br>";
}

if(false){
    echo "Verdadeiro - Parte A<br>";
    echo "Verdadeiro - Parte B<br>";
}else{
    echo "Falso - Parte A<br>";
    echo "Falso - Parte B<br>";
}

if(false){
    echo "Passo A<br>";
}else if(true){
    echo "Passo B<br>";
}else{
    echo "Ultimo passo!<br>";
}

echo "FIM";


?>