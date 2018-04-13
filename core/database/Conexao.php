<?php

class Conexao
{
    public static function conecta_db($config)
    {

        try {

            //  echo "host=".$GLOBALS['database']." port=5432 dbname=".DB_NAME." user=".DB_USER." password=".DB_PASSWORD."<br>" ;
    
            $link = pg_connect("host=".$config['host']." port=5432 dbname=".$config['dbname'].
                              " user=".$config['username']." password=".$config['password']);
            // if (!$link){
            //     throw new Exception("Conexão com database falhou!");
            // }
            return $link;
    
        } catch (Exception $e) {
            // Print PDOException message
            echo "Conexão com database falhou! \n ==> " . $e->getMessage();

        } 
    }
}

// $link = Conexao::conecta_db();
