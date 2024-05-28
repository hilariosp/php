<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>
<body>
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

    echo "<h1>Alunos Aprovados</h1>";

    foreach ($alunos_nota as $aluno){

        if ($aluno['nota']>=7){

            echo "<h2>" . $aluno['nome']. ": " . $aluno['nota'] . "<br>" . "</h2>";

        }
    }  

    echo "<h1>Alunos Reprovados</h1>";

    foreach ($alunos_nota as $aluno){

        if ($aluno['nota']<3){

            echo "<h2>" . $aluno['nome']. ": " . $aluno['nota'] . "<br>" . "</h2>";

        }
    }  

    echo "<h1>Alunos na Final</h1>";

    foreach ($alunos_nota as $aluno){

        if ($aluno['nota']<7 && $aluno['nota']>3){

            echo "<h2>" . $aluno['nome']. ": " . $aluno['nota'] . "<br>" . "</h2>";

        }
    }  
?>

</body>
</html>