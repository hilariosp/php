<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>
<body>
    <h1>Atividade</h1>
    <pre>
    <?php
    $a1 = [
        'alunos' => [
            ['id' => 1, 'nome' => 'fabio', 'idade' => 20, 'endereco' => 'rua pedro alvares cabral', 'cidade'=> 'guanambi'],
            ['id' => 2, 'nome' => 'Jao', 'idade' => 32, 'endereco' => 'rua ana maria braga', 'cidade'=> 'guanambi'],
            ['id' => 3, 'nome' => 'diamili', 'idade' => 17,  'endereco' => 'rua et bilu', 'cidade'=> 'guanambi']
        ]
    ];
    print_r($a1);
    ?>
    </pre>

    <h2>Tabela feita manualmente</h2>

    <table class="table1">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Idade</th>
        <th>Endereço</th>
        <th>Cidade</th>
    </tr>
    <tr>
        <td><?php print_r($a1['alunos'][0]['id']);?></td>
        <td><?php print_r($a1['alunos'][0]['nome']);?></td>
        <td><?php print_r($a1['alunos'][0]['idade']);?></td>
        <td><?php print_r($a1['alunos'][0]['endereco']);?></td>
        <td><?php print_r($a1['alunos'][0]['cidade']);?></td>
    </tr>
    <tr>
        <td><?php print_r($a1['alunos'][1]['id']);?></td>
        <td><?php print_r($a1['alunos'][1]['nome']);?></td>
        <td><?php print_r($a1['alunos'][1]['idade']);?></td>
        <td><?php print_r($a1['alunos'][1]['endereco']);?></td>
        <td><?php print_r($a1['alunos'][1]['cidade']);?></td>
    </tr>
    <tr>
        <td><?php print_r($a1['alunos'][2]['id']);?></td>
        <td><?php print_r($a1['alunos'][2]['nome']);?></td>
        <td><?php print_r($a1['alunos'][2]['idade']);?></td>
        <td><?php print_r($a1['alunos'][2]['endereco']);?></td>
        <td><?php print_r($a1['alunos'][2]['cidade']);?></td>
    </tr>
</table>

<h2>Tabela utilizando apenas um for</h2>

<table class="table2">

    <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Idade</th>
        <th>Endereço</th>
        <th>Cidade</th>
    </tr>
<?php
    for ($a = 0; $a < count($a1['alunos']); $a++){
        echo '<tr>';
            echo '<td>'; print_r($a1['alunos'][$a]['id']); echo '</td>';
            echo '<td>'; print_r($a1['alunos'][$a]['nome']); echo '</td>';
            echo '<td>'; print_r($a1['alunos'][$a]['idade']); echo '</td>';
            echo '<td>'; print_r($a1['alunos'][$a]['endereco']); echo '</td>';
            echo '<td>'; print_r($a1['alunos'][$a]['cidade']); echo '</td>';
        echo '</tr>';
    }
?>
</table>

<h2>Tabela utilizando dois for</h2>

<table class="table3">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Idade</th>
        <th>Endereço</th>
        <th>Cidade</th>
    </tr>
    <?php

$keys = [
    array_keys($a1['alunos'][0]), // $keys[0] a $keys[4] (1, 5)
    array_keys($a1['alunos'][1]), // $keys[5] a $keys[9] (2, 5)
    array_keys($a1['alunos'][2]), // $keys[10] a $keys[14] (3, 5)
  ];
  
  for($i = 0; $i < count($keys); $i++) { // i irá se repetir enquanto ser menor que a quantidade de elementos, no caso 3 vezes
      for($j = 0; $j < count($keys[$i]); $j++) { // j irá se repetir enquanto ser menor que a quantidade de chaves, no caso 5 vezes 
          echo "<td>";
          print ($a1['alunos'][$i][$keys[$i][$j]]);
          echo "</td>";
      }
      echo "</tr>";
    }
    ?>
</table>

</body>
</html>