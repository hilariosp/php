<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>
<body>
    <h1>Array-laços</h1>
    <h2><i>Exemplo 01 (Impressão na posição 0)</i></h2>
    <pre>
        <?php
        $A1 = array ("Antonio", "Luís", "José", "João");

        echo "<br> $A1[0] <br>"
        ?>
    </pre>
    <h2><i>Impressão array com for</i></h2>
    <pre>
        <?php
        $A1 = array ("Antonio", "Luís", "José", "João");

        for ($i=0; $i<count($A1); $i++){
            echo "<br> Posição $i, valor $A1[$i]; <br>";
        }
        ?>
    </pre>
    <h2><i>Impressão array com foreach</i></h2>
    <pre>
        <?php
        $A1 = array ("Antonio", "Luís", "José", "João");

        foreach ($A1 as $dado){
            echo "<br> $dado <br>";
        }
        ?>
    </pre>
    <h2><i>Exemplo 02 (for)</i></h2>
    <pre>
        <?php
        $A2 = array (10, 9, 8, 7);

        for ($i=0; $i<count($A2); $i++){
            echo "<br> $A2[$i] <br>";
        }
        ?>
    </pre>
    <h2><i>Exemplo 03 (foreach)</i></h2>
    <pre>
        <?php
        $A3 = array (10, 9, 8, 7);

        foreach ($A3 as $dado){
            echo "<br> $dado <br>";
        }
        ?>
    </pre>
    <h2><i>Definição explícita com chaves</i></h2>
    <pre>
        <?php
        $var = array ("Maria" => 25, 
                     "João" => 44,
                     "José" => 12,
                     "Neusa" => 73);

        foreach ($var as $chave => $dado){
            echo "<br> $chave: $dado <br>";
        }
        ?>
        
    <h2><i>Print_r >>> mostra o que tem armazenado no array</i></h2>
    <pre>
        <?php
        print_r ($var);
        ?>
    </pre>

    <h2><i>Array Multidimensional: Definição Explícita</i></h2>
    <pre>
        <?php
        $Alunos = array (
        "Maria" => array ("endereco" => "Rua Chile 1046",
                         "bairro" => "Rebouças",
                         "cidade" => "Guanambi"),
        "João" => array ("endereco" => "Rua Iapó 234",
                         "bairro" => "Prado Velho",
                         "cidade" => "Guanambi"),                 
        "Zeca" => array ("endereco" => "Rua Iapó 234",
                         "bairro" => "Prado Velho",
                         "cidade" => "Guanambi"),            
        );
        print_r ($Alunos);
        echo "<br>";
        print_r ($Alunos["Maria"] ["endereco"]);
        echo " ";
        print_r ($Alunos["Maria"] ["bairro"]);
        echo " ";
        print_r ($Alunos["Maria"] ["cidade"]);
        echo "<br>";
        print_r ($Alunos["Zeca"] ["bairro"]);
        echo "<br>";
        print_r ($Alunos["João"] ["bairro"]);
        
        ?>

        <h2><i>Impressão do array com foreach</i></h2>

        <pre>

        
            <?php
            
            echo "<br>";

                foreach ($Alunos as $chave => $aux){

                    echo "$chave: <br>";
                    
                    foreach ($aux as $chave => $valor){

                        echo " - $valor<br>";
                    }
                echo "<br>";
                }

                
            
            ?>

        <pre>

        
    </pre>
</body>
</html>