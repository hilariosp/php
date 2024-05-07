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

$aluno1 = array (
    "nome" => "Fábio",
    "idade" => "12",
    "endereco" => "Camboja",
    "cidade" => "Guanambi",
    "estado" => "Bahia",
    "cpf" => 12345
);

echo "Nome: $aluno1[nome] <br>";
echo "Idade: $aluno1[idade] <br>";
echo "Endereço: $aluno1[endereco] <br>";
echo "Cidade: $aluno1[cidade] <br>";
echo "Estado: $aluno1[estado] <br>";
echo "CPF: $aluno1[cpf] <br> <br>";
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

foreach ($aluno3 as $dado) {
    echo "$dado <br>";
    }

?>
</body>
</html>