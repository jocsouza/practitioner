<?php

$tasks = $app['database']->selectAll('tarefas');

require 'view/tarefas.view.php';
