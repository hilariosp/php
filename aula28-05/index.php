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

    <h2>Define</h2>
    <pre>
    <?php

    define("G", 9.80665);
    echo "<br>Gravidade = " . G . "<br>";

    ?>
    </pre>
    <h2>Function</h2>
    <pre>
    <?php
        echo "<h3>Função 01</h3>";
        function funcConsts() {
        echo "ARQUIVO: ".__FILE__."<br>";
        echo "DIRETÓRIO: ".__DIR__."<br>";
        echo "LINHA: ".__LINE__."<br>";
        echo "FUNÇÃO: ".__FUNCTION__."<br>";
    }
    funcConsts();

        echo "<h3>Função Sem Parâmetro</h3>";

        function soma(){ //funcao sem parametro

            $a1 = 2;
            $a2 = 7;
            $s = $a1 + $a2;
            echo "Soma = $s <br>";

        }
        soma();

        echo "<h3>Função Com Parâmetro</h3>";

        function velocidade($ds, $dt){ //funcao com parametro

            $v = $ds/$dt;
            echo "Velocidade = $v<br>";

        }
        print_r(velocidade(6, 12));
        echo "<br>";
        print_r(velocidade(8, 2));

        echo "<h3>Função com retorno</h3>";
        function somamultiplica($a1, $a2, $a3){ //funcao com parametro

            $somamultiplica = ($a1+$a2)*$a3;
            return "Resultado = $somamultiplica<br>";
        }

        print_r(somamultiplica(5, 3, 4));

        function quatroperadores($p1, $p2){

            $soma = $p1+$p2;
            $divisao = $soma/$p1;
            $subtracao = $divisao-$p2;
            $multiplicacao = $subtracao*$p1;
            return $multiplicacao;
        }

        echo "Resultado: " . (quatroperadores(10, 2)) . "<br>";

        
        function quadrado($p1){

            $result = $p1*$p1; 
            return $result;
        }

        echo "Resultado: ". (quadrado(3));
    ?>
    </pre>
    <h1>Variáveis Superglobais</h1>
    <h2>$GLOBALS</h2>
    <pre>
    <?php
    print_r($GLOBALS);
    ?>
    </pre>
    <h2>$_SERVER</h2>
    <pre>
    <?php
    print_r($_SERVER);
    ?>
    </pre>
    <h2> $_COOKIE</h2>
    <pre>
    <?php
    print_r($_COOKIE);
    ?>
    </pre>
    <h2>$_FILES</h2>
    <pre>
    <?php
    print_r($_FILES);
    ?>
    </pre>
    <h2>$_ENV</h2>
    <pre>
    <?php
    print_r($_ENV);
    ?>
    </pre>
    <h2>$_REQUEST</h2>
    <pre>
    <?php
    print_r($_REQUEST);
    ?>
    </pre>
    <h2>$_SESSION</h2>
    <pre>
    <?php
    print_r($_SESSION);
    ?>
    </pre>
    <h1>Funções</h1>
    <pre>
    <?php
    function nome_funcao($par_1 = 6, $par_2 = "vazio") {
    echo "<br>Código da Função<br>";
    return "Dado de Retorno: ".$par_1."/".$par_2;
    }
    $retorno = nome_funcao();
    echo $retorno."<br><br>";
    $retorno = nome_funcao(12, "Bill Gates");
    echo $retorno."<br><br>";
    ?>
    </pre>
</body>
</html>