<?php 

/*
Criar as pastas:
    - templates
    - templates_c (compilado)
    - cache
    - config
*/

require 'config/config.php';

//logica do arquivo index.php

$smarty->assign('titulo', 'Aprendendo um pouco de smarty');
$smarty->assign('mensagem', 'Tutorial do Smarty - 4');

$frutas = ['banana', 'laranja', 'abacaxi'];

$smarty->assign('frutas', $frutas);

$atletas = [
    '0' => [
        'nome' => 'Roger Federer',
        'esporte' => 'Tenis'
    ],
    '1' => [
        'nome' => 'Cleitin',
        'esporte' => 'Skate'
    ],
    '2' => [
        'nome' => 'Roberto',
        'esporte' => 'Judo'
    ],
];

$smarty->assign('atletas', $atletas);

$jogador - new stdClass();
$jogador->nome = 'Merirton sluguy';
$jogador->idade = 35;

$smarty->assign('jogador', $jogador);

//acessando informacoes GET, POST, SESSION, COOKIES



//chamar view

$smarty->display('index.tpl');


