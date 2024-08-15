<?php
for ($i=0; $i <4 ; $i++) { 
    # code...
    echo "Por favor, insira os seguintes dados:\n";
    echo "Nome: ";
    $nome = readline();
    echo "Idade: ";
    $idade = readline();
    echo "Cidade Natal: ";
    $cidadeNatal = readline();
    echo "Profissão: ";
    $profissao = readline();
   // Armazenar os dados em um array associativo
    $pessoaUsuario = array(
        "nome" => $nome,
        "idade" => $idade,
        "cidadeNatal" => $cidadeNatal,
        "profissao" => $profissao
    );
    // Adicionar o usuário à lista de pessoas
    $pessoas[] = $pessoaUsuario;

}

// Encontrar a pessoa mais velha
$pessoaMaisVelha = null;
$idadeMaisVelha = 0;

foreach ($pessoas as $pessoa) {
    if ($pessoa["idade"] > $idadeMaisVelha) {
        $idadeMaisVelha = $pessoa["idade"];
        $pessoaMaisVelha = $pessoa;
    }
}

// Exibir os dados da pessoa mais velha
echo "\nDados da pessoa mais velha:\n";
echo "Nome: " . $pessoaMaisVelha["nome"] . "\n";
echo "Idade: " . $pessoaMaisVelha["idade"] . " anos\n";
echo "Cidade Natal: " . $pessoaMaisVelha["cidadeNatal"] . "\n";
echo "Profissão: " . $pessoaMaisVelha["profissao"] . "\n";
    	