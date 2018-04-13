<?php

class QueryBilder
{

    protected $link;

    public function __construct($link)
    {
        $this->link = $link;

    }

    
    /*
    * Rotina de todos os registros da base de dados
    */

    public function selectAll($table)
    {

        $statement = "select * from $table";
    
        $results = pg_query($this->link, $statement);
    
        return (object) pg_fetch_all($results);
    }

    public function insert($table, $data)
    {
        try {
                $insert = sprintf ('INSERT INTO %s (%s) VALUES (%s);',
                                $table,
                                implode(', ', array_keys($data)),
                                "'" . implode("', '", $data) . "'" 
                            );

            pg_query($this->link, $insert);
        
        } catch (Exception $e) {
            // Print PDOException message
            echo "Erro na inclusão dos dados! \n ==> " . $e->getMessage();

        } 
    }

}