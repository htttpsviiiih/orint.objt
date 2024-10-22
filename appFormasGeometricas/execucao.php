<?php 

require_once("modelo/Circulo.php");
require_once("modelo/Quadrado.php");
require_once("modelo/Retangulo.php");




function mostrarMenu() {
    echo "Escolha uma opção:\n";
    echo "1. Circulo\n";
    echo "2. Quadrado\n";
    echo "3. Retangulo\n";
    echo "0. SAIR\n";
}

do{
    mostrarMenu();
    $opcao = (int)readline("Escolha uma das formas geometricas: ");

    switch ($opcao) {
        case 0:
            echo "Você saiu do programa! \n";
            break;
        case 1:
             $circulo = new Circulo();
             $circulo->setRaio((float)readline("Digite o raio do circulo: "));
             if (is_float($circulo->getRaio())) {
               echo "Área: ".round($circulo ->getArea(),2). "\n";
              echo "Desenho: \n\n".$circulo->getDesenho(). "\n";
             }else{
                echo "Resposta invalida \n";
             }
            break;
        case 2: 
            $quadrado = new Quadrado();
            $quadrado->setAltura(readline("Digite a altura do seu quadrado: "));
            $quadrado->setBase(readline("Digite a base do seu quadrado: "));
            if (is_int($quadrado->getAltura()) && is_int($quadrado->getBase())) {
                echo "Área: ".$quadrado->getArea()."\n";
                echo "Desenho: \n\n".$quadrado->getDesenho(). "\n";
            }else{
                echo "Resposta invalida \n";
             }
            break;
        case 3:
            $retangulo = new Retangulo();
            $retangulo->setAltura(readline("Digite a altura do seu retangulo: "));
            $retangulo->setBase(readline("Digite a base do seu retangulo: "));
            if (is_int($retangulo->getAltura()) && is_int($retangulo->getBase())) {
                echo "Área: ".$retangulo->getArea()."\n";
                echo "Desenho: \n\n".$retangulo->getDesenho(). "\n";
            }
            else{
                echo "Resposta invalida \n";
             }
        default:
            echo "Opção inválida! Tente novamente.\n";
    }
}
while ($opcao);








