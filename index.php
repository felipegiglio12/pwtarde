
<?php

    echo "minha mensagem\n";
    echo"<br>";
    echo "<h1>meu html</h1>";

    $nome = "felipe";
    $idade = 22;
    $altura = 1.75;
    $solteiro = true;


    $prova1 = 8;
    $prova2 = 7.5;
    $soma = $prova1+ $prova2 ;
    $media = $soma / 2;


    $multiplicaçao = $prova1 * $prova2;
    $subtração = $prova1 - $prova2;


    const nomecompleto = "felipe rodrigo giglio";
    echo "<p>". nomecompleto."<p>";

    if($media >= 6 && $faltas <= 20){
        echo"<br>aprovado"."<br>";
    }else{
        echo "<br>reprovado"."<br>";
    }

    # != diferente
    # == igual
    # > maior
    # < menor 
    # >= maior e igual
    # <= menor e igual
    # === mesmo conteudo e mesmo tipo

    $valor = 10;


    #valor + valor + 5;
    $valor += 5;
    $valor -= 7;
    $valor *= 2;
    $valor /= 1;



    #incremento para laço de repetição
    $valor += 1;


    #resto da divisão (mod)
    $resto = 4 % 2;


    //se par ou impar 
    if($valor % 2 == 0){
        echo "par";
    }

    for($i = 1; $i)

?>
