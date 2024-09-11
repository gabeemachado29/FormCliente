<?php
    
    // $nome = "Gabriel";
    // $idade = 20;
    // $altura = 1.75;

    // echo 'Olá mundo! Eu sou o ' .$nome.', tenho '.$idade. ' anos e ' .$altura. ' de altura';

    // $a = 10;
    // $b = 19;

    // var_dump($a);
  
    // $nome = array("Gabriel", "Josue", "Douglas", "Matheus");
    // // var_dump($nome);

    // for($i = 0; $i <= 3; $i++){
    //     echo $nome[$i];
    //     echo "<br>";
    // }

    $funcionario = array("nome" => "Alex", "idade" => 21, "salario" => 1285.27, "ativo" => true);
    
    foreach($funcionario as $chave => $valor) {
        echo "$chave: $valor";
        echo "<br>";
    }


?>