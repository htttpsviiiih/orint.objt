<?php 
class Posto {
    private $litrosGasolina;
    private $abastecimentosCarros;

    public function __construct() {
        $this->litrosGasolina = 0;
        $this->abastecimentosCarros = array();
    }

    public function abastecer($litros) {
        if ($this->litrosGasolina >= $litros) {
            $this->litrosGasolina -= $litros;
            $this->abastecimentosCarros[] = $litros; // Somente os abastecimentos de carros são registrados
            return true;
        }
        return false;
    }

    public function reporGasolina($litros) {
        $this->litrosGasolina += $litros; // Reposição de gasolina, sem registrar no histórico de abastecimentos
    }

    public function listarAbastecimentos() {
        return $this->abastecimentosCarros; // Retorna apenas os abastecimentos de carros
    }

    public function getEstoque() {
        return $this->litrosGasolina;
    }
}

$posto = new Posto;
$opcao = 0;

do {
    echo "\n-----------MENU-----------\n";
    echo "1- Abastecer carro\n";
    echo "2- Repor gasolina no posto\n";
    echo "3- Listar abastecimentos do dia\n";
    echo "0- SAIR\n";
    $opcao = readline("Escolha a função que deseja executar, ou prima 0 para encerrar: ");

    switch ($opcao) {
        case 0:
            echo "Fim do programa\n";
            break;

        case 1:
            $litros = readline("Quantos litros deseja abastecer? ");
            if ($posto->abastecer($litros)) {
                echo "Abastecimento realizado com sucesso!\n";
            } else {
                echo "Não há gasolina suficiente para esse abastecimento.\n";
            }
            break;

        case 2:
            $litros = readline("Quantos litros de gasolina deseja repor no posto? ");
            $posto->reporGasolina($litros);
            echo "Estoque atualizado. Total de litros no posto: " . $posto->getEstoque() . "\n";
            break;

        case 3:
            $abastecimentos = $posto->listarAbastecimentos();
            if (count($abastecimentos) > 0) {
                foreach ($abastecimentos as $a => $abastecimento) {
                    echo "Abastecimento " . ($a + 1) . ": " . $abastecimento . " litros\n";
                }
            } else {
                echo "Nenhum abastecimento foi realizado até agora.\n";
            }
            break;

        default:
            echo "Opção INVÁLIDA!\n";
            break;
    }
} while ($opcao != 0);
