<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>

        p{

            color: yellow;
            font-size: 20px;
        }
    </style>
    <title>Document</title>
</head>
<body>
    <p>Aluno 1</p>
    <?php

$aluno1 = array ("Fábio", "12", "Camboja", "Guanambi", "Bahia", 12345);

for($a=0; $a<count($aluno1); $a++) {
    echo "$aluno1[$a] <br>";
}
?>
    <p>Aluno 2</p>
<?php
$aluno2 = array ("Hilário","17","Rua Silva Jardim","Licínio de Almeida","Bahia", 67890);

for($a=0; $a<count($aluno1); $a++) {
    echo "$aluno2[$a] <br>";
}
?>

    <p>Aluno 3</p>
    
<?php
$aluno3 = array ("Hilária", "17","Rua Silva Jardim","Licínio de Almeida","Bahia", 24680);

for($a=0; $a<count($aluno3); $a++) {
    echo "$aluno3[$a] <br>";
}
?>
</body>
</html>