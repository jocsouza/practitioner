<?php
/**
 * Este arquivo é usado para configuração de conecção de banco de dados, acesso à API do ZABBIX
 */

// ** PostgreSQL settings - You can get this info from your web host ** //
/** The host of the database */

return [
   'database' => [
        'host' => '127.0.0.1',
        'dbname' => 'bddev',
        'username' => 'smidev',
        'password' => 'smidev',
        'options' => []

   ],
   'zabbix' => [
       'username' => 'apizabbix',
       'password' => 'nprsitw'

   ]
];
