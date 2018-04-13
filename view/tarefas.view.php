<?php require 'partials/header.php'; ?>

    <header>
        <h1>Tarefas</h1>
    </header>

    <ul> 
        <?php foreach ($tasks as $task) : ?>
            <li>
                <?php
                echo $task['incidente'] . " / " ;
                if($task['status']=="Fechado") : ?>
                        <strike>
                <?php endif; ?>

                <?= $task['data_ini'] . " / " .  $task['demanda']; ?>

                <?php
                if($task['status']=="Fechado") : ?>
                    </strike>
                <?php endif; ?>

            </li> 
        <?php endforeach; ?>
    </ul>

<header>
  <H2>INCLUSÃO EM <?= date('d/m/Y'); ?><H2>
</header>
    <form method="POST" action="/addtarefas" id="cadTarefa"> 

        Incidente: <input name="incidente"></input><br>
        Data: <input name="data_ini"></input><br>
        Grupo: <input name="grupo"></input><br>
        Cliente: <input name="cliente"></input><br>
        Descrição da Demanda:<br> <textarea rows="4" cols="50" name="demanda" ></textarea><br>
        Dados do evento: <br> <textarea rows="8" cols="80" name="evento" ></textarea><br>
        Encaminhamento: <br> <textarea rows="8" cols="80" name="encaminhamento"></textarea><br>
        Status: <select name="status" form="cadTarefa"> 
            <option value="Encaminhado" selected>Encaminhado</option>
            <option value="Em atendimento">Em atendimento</option>
            <option value="Fechado">Fechado</option>
        </select>

        <button type="submit">Enviar</button>

    </form>
<?php require('partials/footer.php');