<!DOCTYPE html>
<html lang="pt-br">

<head>
     <meta charset="utf-8">
    <title>Página de teste</title>
    <style>
        header{
            background: #e3e3e3;
            text-align: center;
        }
    </style>   

</head>

<body>
    <header>
        <h1>
            <?= "Tarefa - utilização de classe!"; ?>
        </h1>
    </header>
    <ul> 
        <?php foreach ($tasks as $task) : ?>
            <li>
                <?php
                if($task->status) : ?>
                        <strike>
                <?php endif; ?>

                <?= $task->descricao; ?>

                <?php
                if($task->status) : ?>
                        </strike>
                <?php endif; ?>

            </li> 
        <?php endforeach; ?>
    </ul>
</body>

</html>