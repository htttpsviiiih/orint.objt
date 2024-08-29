<?php
function dados(){
    $nome = readline("Digite o nome da cidade: ");
    $habitantes = readline("Digite o número de habitantes: ");
    $area = readline("Digite a área da cidade (em km²): ");
    $altitude = readline("Digite a altitude da cidade (em metros): ");
    $estado = readline("Digite o estado em que a cidade está localizada: ");

    return array("nome" => $nome, "habitantes" => $habitantes, "area" => $area, "altitude" => $altitude, "estado" => $estado);
}

$cidades = array();
for ($i = 0; $i < 5; $i++) {
    $cidades[] = dados();
}

foreach ($cidades as $cidade) {
    echo "{$cidade['nome']} | {$cidade['habitantes']} | {$cidade['area']} km² | {$cidade['altitude']} m | {$cidade['estado']}\n";
}
?>
