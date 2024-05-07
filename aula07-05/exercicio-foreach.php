<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>

        p{

            color: green;
            font-size: 20px;
            background-color: white;
        }

        body{

            background-color: skyblue;
        }
    </style>
    <title>Document</title>
</head>
<body>
    <p>Aluno 1</p>
    <?php

$aluno1 = array ("Fábio", "12", "Camboja", "Guanambi", "Bahia", 12345);

foreach ($aluno1 as $dado) {
    echo "$dado <br>";
    }
?>
    <p>Aluno 2</p>
<?php
$aluno2 = array ("Hilário","17","Rua Silva Jardim","Licínio de Almeida","Bahia", 67890);

foreach ($aluno2 as $dado) {
    echo "$dado <br>";
    }
?>

    <p>Aluno 3</p>
    
<?php
$aluno3 = array ("Hilária", "17","Rua Silva Jardim","Licínio de Almeida","Bahia", 24680);

foreach ($aluno3 as $dado) {
    echo "$dado <br>";
    }
?>
</body>
</html>