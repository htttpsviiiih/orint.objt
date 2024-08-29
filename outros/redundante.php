<?php 

$nomedaVar = "minha var";
$$nomedaVar = "45";

    echo "O valor de " .$nomedaVar. " é " .$$nomedaVar."";

    //imprime a frase "o valor de minha var é 45"

    /*Apesar do nome redundante($$), o significadoe é esse mesmo:
    indica que, além do valor da variável, seu nome nome pode
    ser acessado de forma alternativa, como mostra o código acima*/