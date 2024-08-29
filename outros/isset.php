<?php

    if(isset($minhaVar))

            echo " A variável está definida";

    $minhaVar = " ";

    if(isset($minhaVar))

            echo " A variável está definida ";

    /* O codigo a seguir apresenta um exemplo de uso da função isset.
    No exemplo, o primeiro comando if não exibirá sua mensagem, pois a
    variável em questão ainda não terá sido definida, mas o segundo 
    comando if exibirá a mensagem, mesmo que a variável esteja com o
    valor vazio, o comando indica que ela contém algum valor. O segundo
    if não entraria em seu bloco de código caso a variável não tivesse
    sido criada ou se tivesse armazenado o camor null.*/ 
