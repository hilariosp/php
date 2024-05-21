<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <h1>Atividade de Casa</h1>
    <h2><i>Array frutas:</i></h2>
    <pre>

    <?php

    $frutas = array (
        "strawberry" => "morango",
        "orange" => "laranja",
        "banana" => "banana",
        "lemon" => "limão",
        "blueberry" => "mirtilo",
        "grape" => "uva",
        "pitaya" => "pitaia"           
    );
    
    print_r ($frutas);

    ?>
    </pre>
    <h2><i>1. array_keys(arr):</i></h2>
    <pre>
    <?php
    //Imprimindo chaves utilizando o comando 'array_keys(arr)'
    $key = array_keys($frutas);
    print_r($key);
    ?>
    </pre>

    <h2><i>2. array_values(arr):</i></h2>
    <pre>
    <?php
    //Imprimindo valores utilizando o comando 'array_values(arr)'
    $val = array_values($frutas);
    print_r($val);
    ?>
    </pre>

    <h2><i>2. array_search(val, arr):</i></h2>
    <pre> 
    <?php
    //Imprimindo o valor procurado no array e a sua chave
    echo "Chave procurada: Limão<br>";
    $search = array_search("Limão", $frutas);
    echo "<br>Chave: $search<br>";
    ?>
    </pre>

    <h2><i>3. bool array_key_exists(key, arr):</i></h2>
    <pre> 
    <?php
        echo "Verificando se cada uma das chaves existem: <br> <br>";
        echo " strawberry: ";
    //Verificando se a chave existe
    if (array_key_exists("strawberry", $frutas)) {
        echo "A chave strawberry existe no array. <br>"; // Saída: A chave existe.
    }

    else {
        echo "<br>A chave não existe <br>"; // Saída: A chave não existe.
    }
    echo " apple: ";

    if (array_key_exists("apple", $frutas)) {
        echo "A chave apple existe no array. <br>"; // Saída: A chave existe.
    }

    else {
        echo "A chave apple não existe no array. <br>";  // Saída: A chave não existe.
    }
    ?>
    </pre>

    <h2><i>4.  bool in_array(val, arr):</i></h2>
    <pre> 
    <?php
        echo "Verificando se cada um dos valores existem: <br> <br>";
        echo " laranja: ";
    //Verificando se a chave existe
    if (in_array("laranja", $frutas)) {
        echo "O valor laranja existe no array. <br>"; // Saída: O valor existe.
    }

    else {
        echo "<br>O valor laranja não existe <br>"; // Saída: O valor não existe.
    }
    echo " limão: ";

    if (in_array("limão", $frutas)) {
        echo "O valor limão existe no array. <br>"; // Saída: O valor existe.
    }

    else {
        echo "O valor limão não existe no array. <br>";  // Saída: O valor não existe.
    }
    ?>
    </pre>

    <h2><i>6. isset(var):</i></h2>
    <pre>
    <?php 
    echo "<br> Verifica se uma variável está definida e não é nula <br> <br>";
    $var = "abacaxi";
    if (isset($var)) {
    echo " A variável $var está definida."; // Saída: A variável $var está definida.
    }
    ?>
    </pre>

    <h2><i>7. unset(var):</i></h2>
    <pre>
    <?php
    unset($var);
    echo "<br> Destrói a variável especificada <br> <br>";
if (!isset($var)) {
    echo " var = *não existe* <br>";
    echo " A variável foi destruída."; // Saída: A variável $var foi destruída.
}
?>
</pre>

<h2><i>8. empty(var): </i></h2>
<pre>
<?php
    echo "<br> Verifica se uma variável está vazia <br> <br>";
    $var = ""; 
if (empty($ar)) {
    echo " var = $var <br>";
    echo " A variável está vazia."; // Saída: A variável $emptyVar está vazia.
}
?>
</pre>
<h2><i>9. array_push:</i></h2>
<pre>
<?php
$arrayPush = array("PHP", "JavaScript");

echo " Adiciona elementos no final do array<br><br> Array antes do array_push:<br><br>" . print_r($arrayPush, true);
echo "<br>";
array_push($arrayPush, "Python", "Java");
echo  " Array após array_push:<br><br>" . print_r($arrayPush, true);
?>
</pre>
<h2><i>10. array_pop:</i></h2>
<pre>
<?php
$elementoPop = array_pop($arrayPush);
echo "Extrai um elemento do final do array<br><br>";
echo "Elemento extraído com array_pop: $elementoPop<br><br>";
echo "Array após array_pop:<br><br>" . print_r($arrayPush, true) . '</pre>';
?>
</pre>
<h2><i>11. array_shift:</i></h2>
<pre>
<?php
$elementoShift = array_shift($arrayPush);
echo "Remove o primeiro elemento do array <br><br>";
echo "Elemento extraído com array_shift: $elementoShift<br><br>";
echo "Array após array_shift:<br><br>" . print_r($arrayPush, true);
?>
</pre>

<h2><i>12. array_unshift:</i></h2>
<pre>
<?php
array_unshift($arrayPush, "C++", "Ruby");
echo "Adiciona elementos no início do array<br><br>";
echo "Array após array_unshift:<br><br>" . print_r($arrayPush, true);

?>
</pre>

<h2><i>13. count:</i></h2>

<pre>
<?php

$countArray = count($arrayPush);
echo "Conta o número de elementos do array <br><br>";
echo "Número de elementos no array: $countArray<br>";
?>
</pre>
<h2><i>14. explode:</i></h2>
<pre>
<?php
echo "Divide uma string em um array<br><br>";
$string = "PHP,JavaScript,Python,Java";
$arrayExplode = explode(",", $string);
echo "Array após explode:<br><br>". print_r($arrayExplode, true);
?>
</pre>
<h2><i>15. implode:</i></h2>
<pre>
<?php

echo "Junta elementos do array em uma string<br><br>";
$stringImplode = implode(" - ", $arrayExplode);
echo "String após implode: $stringImplode<br>";
?>
</pre>
<h2><i>16. array_combine:</i></h2>
<pre>
<?php
$arrayKeys = array("a", "b", "c");
$arrayValues = array(1, 2, 3);
$arrayCombine = array_combine($arrayKeys, $arrayValues);
echo " Cria um array usando outro array para chaves e valores<br><br>";
echo "Array após array_combine:<br><br>". print_r($arrayCombine, true);
?>
</pre>
<h2><i>17. array_diff:</i></h2>
<pre>
<?php
echo "Encontra a diferença entre dois arrays";
$array1 = array("a", "b", "c", "d");
$array2 = array("c", "d", "e");
$arrayDiff = array_diff($array1, $array2);
echo "Diferença entre array1 e array2:<br>" . print_r($arrayDiff, true);
?>
</pre>
<h2><i>18. array_intersect:</i></h2>
<pre>
<?php

echo "Encontra a intersecção entre dois arrays<br><br>";
$arrayIntersect = array_intersect($array1, $array2);
echo "Intersecção entre array1 e array2:<br><br>" . print_r($arrayIntersect, true);
?>
</pre>
?>
</body>
</html>