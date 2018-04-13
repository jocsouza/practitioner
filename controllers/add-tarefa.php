<?php

$app['database']->insert('tarefas', [
    'incidente' => $_POST['incidente'], 
    'data_ini' => $_POST['data_ini'], 
    'grupo' => $_POST['grupo'], 
    'cliente' => $_POST['cliente'], 
    'demanda' => $_POST['demanda'],
    'evento' => $_POST['evento'], 
    'encaminhamento' => $_POST['encaminhamento'],
    'status' => $_POST['status'],
    'data_atendimento' => date("Y-m-d H:i:s")
]);

header("Location: /tarefas");