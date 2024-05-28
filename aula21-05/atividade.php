<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

    <h1>Atividade</h1>

    <?php

    $alunos_nota = [

            ["nome" => "pedro", "nota" => 9.3],
            ["nome" => "maria", "nota" => 8],
            ["nome" => "jose", "nota" => 5],
            ["nome" => "ana", "nota" => 3],
            ["nome" => "arthur", "nota" => 2]

    ];

    echo "<pre>";
    print_r ($alunos_nota);
    echo "</pre>";

?>
<h2>Alunos Aprovados</h2>
<pre>
<?php

    

    foreach ($alunos_nota as $aluno){

        if ($aluno['nota']>=7){

            echo $aluno['nome']. ": " . $aluno['nota'] . "<br>";

        }
    }  
   
?>
</pre>
<h2>Alunos Reprovados</h2>
<pre>
<?php
    foreach ($alunos_nota as $aluno){

        if ($aluno['nota']<3){

            echo $aluno['nome']. ": " . $aluno['nota'] . "<br>";

        }
    }  
?>
</pre>

<h2>Alunos na Final</h2>

<pre>
<?php



    foreach ($alunos_nota as $aluno){

        if ($aluno['nota']<7 && $aluno['nota']>3){

            echo $aluno['nome']. ": " . $aluno['nota'] . "<br>";

        }
    }  
?>
</pre>
</body>
</html>
