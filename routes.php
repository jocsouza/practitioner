<?php

// $router->define([
//     '' => 'controllers/index.php',
//     'tarefas' => 'controllers/tarefas.php',
//     'sobre' => 'controllers/sobre.php',
//     'sobre/cultura' => 'controllers/sobre-cultura.php',
//     'contato' => 'controllers/contato.php',
//     'addtarefas' => 'controllers/add-tarefa.php'
// ]);

//roteamento via metodos
$router->get('','controllers/index.php');
$router->get('tarefas','controllers/tarefas.php');
$router->get('sobre','controllers/sobre.php');
$router->get('sobre/cultura','controllers/sobre-cultura.php');
$router->post('addtarefas','controllers/add-tarefa.php');
