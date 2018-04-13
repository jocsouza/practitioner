<?php

$inicio = date('d/m/Y H:i:s');

require 'functions.php';

$app = [];

$app['config'] = require 'config.php';

// require 'core/Router.php';
// require 'core/Request.php';
// require 'core/database/Conexao.php';
// require 'core/database/QueryBilder.php';

$app['database'] =  new QueryBilder(
    Conexao::conecta_db($app['config']['database'])
    );