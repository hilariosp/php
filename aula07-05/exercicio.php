<?php

$alunos = array ("hilario", "hilaria", "diamili", "guilherme andrade", "kailla", "sarah", "mariana", "jose pedro", "ivan");

echo "exemplo com for <br> <br>";

for ($i=0; $i<count ($alunos); $i++){

    echo "$alunos[$i] <br>";

}

echo "<br> exemplo com foreach <br> <br>";

foreach ($alunos as $v){

    echo "$v <br>";

}

echo "<br> atividade <br> <br>";

for ($i=0; $i<count ($alunos); $i++){

    if ($i==4){
    echo " $alunos[4] <br>";
    }
}
?>

