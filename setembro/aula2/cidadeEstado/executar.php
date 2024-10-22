<?php

    require_once("modelo/Cidade.php");
    require_once("modelo/Estado.php");

    $catalogo = array();

    $foz = new Cidade;
    $parana = new Estado;
    $santaCatarina = new Estado;

    $foz->setNome("Foz do Iguaçu");
    $foz->setQtdHabitantes(258.248);
    $foz->setAltitude(192);
    $foz->setEstado($parana);
    array_push($catalogo, $foz);


    $florianopolis = new Cidade;
    $florianopolis->setNome("Florianópolis");
    $florianopolis->setQtdHabitantes(537.211);
    $florianopolis->setAltitude(3);
    $santaCatarina->setNome("Santa Catarina");
    $santaCatarina->setSigla("SC");
    $florianopolis->setEstado($santaCatarina);

    array_push($catalogo, $florianopolis);

    $blumenau = new Cidade;
    $blumenau->setNome("Blumenau");
    $blumenau->setQtdHabitantes(361.855);
    $blumenau->setAltitude(21);
    $santaCatarina->setNome("Santa Catarina");
    $santaCatarina->setSigla("SC");
    $blumenau -> setEstado($santaCatarina);

    array_push($catalogo, $blumenau);

    $cascavel = new Cidade;
    $fozEstado = new Estado;

    $cascavel->setNome("Cascavel");
    $cascavel->setQtdHabitantes(348.051);
    $cascavel->setAltitude(781);
    $parana->setNome("Paraná");
    $parana->setSigla("PR");
    $cascavel->setEstado($parana);

    array_push($catalogo, $cascavel);

    foreach ($catalogo as $cidades) {
        echo $cidades;
    }