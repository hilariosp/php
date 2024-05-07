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
    <p>Exemplo1</p>
    <?php

$var = array(1=>1, 2=>2, 3=>3, 5=>5);


echo "$var[1] <br>";
echo "$var[2] <br>";
echo "$var[3] <br>";
echo "$var[5] <br>";
?>
    <p>Exemplo2</p>
<?php
$var1 = array(
    "Fabio" => 30,
    "Eber" => 40,
    "Wr" => 60
);

    echo "$var1[Fabio] <br>";
    echo "$var1[Eber] <br>";
    echo "$var1[Wr] <br>";
?>

    <p>Exemplo3</p>
    
<?php
$var2 = array (
    0 => 5,
    6 => 8,
    9 => 15
);

$var2[1] = "20";
$var2[2] = "3";
$var2[5] = "4";

    echo "$var2[0] <br>";
    echo "$var2[6] <br>";
    echo "$var2[9] <br>";
    echo "$var2[1] <br>";
    echo "$var2[2] <br>";
    echo "$var2[5] <br>";
?>
</body>
</html>

