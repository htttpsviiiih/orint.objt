<?php
$alunos = [];
echo "\n            Rankeando as 10 melhores notas da escola D'carmo \n";
echo "\n";

for ($i = 0; $i < 5; $i++) {
    $dados_aluno = array(
                "Nome"=> readline("Nome do aluno(a): "),
                "Turma" => readline("Turma do aluno(a): "),
                "Turno" => readline("Turno do aluno(a): "),
                "Média" => floatval(readline("Média do aluno(a): "))
            );
    // Adiciona os dados do aluno ao array $alunos
    array_push($alunos, $dados_aluno);
}

// Ordena pelo critério da média (do maior para o menor)
usort($alunos, function ($a, $b) {
    return $b["Média"] <=> $a["Média"];
});

echo "\nRanking:\n";
foreach ($alunos as $aluno) {
    echo "{$aluno['Nome']} | Turma: {$aluno['Turma']} | Turno: {$aluno['Turno']} | Média: {$aluno['Média']}\n";
}