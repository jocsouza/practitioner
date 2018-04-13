<?php
/*
 * Este arquivo é usado para funções
*/
function exception_error_handler($errno, $errstr, $errfile, $errline ) {
    throw new ErrorException($errstr, $errno, 0, $errfile, $errline);
}

set_error_handler("exception_error_handler");

//
function dd($data){

    echo '<pre>';

    die(var_dump($data));

    echo '</pre>';
    
}

//
function ddjson($data){

    $data = json_encode($data);
    echo '<pre>';
    die(print_r($data));
    echo '</pre>';
    
}

function verificaIdade($idade, $flag=false){

    if($idade < 15){
        $flag = true;
    }

    return $flag;
}


/*
 * Rotina de rastreio de log
 */
function salvaLog($msg){
	fwrite($GLOBALS['log'], $msg);
	return ;
}

/*
 * Rotina de envio de log p/ zabbix
 */
function logZabbix($ip_sender, $srvZabbix, $texto, $chave){
	// enviar log para zabbix
// 	$zabbix = "/usr/local/bin/zabbix_sender -z $ip_sender -s $srvZabbix -k 'cargaInterfaces".$orig."' -o ".$texto;
	$zabbix = "/usr/local/bin/zabbix_sender -z $ip_sender -s $srvZabbix -k '$chave' -o ".$texto;
	$output = shell_exec($zabbix);
	
}

/*
 * Rotina de retirada de caracteres especiais de strings
 */
function removeacento($str)
{
	$string = iconv( "UTF-8" , "ASCII//TRANSLIT//IGNORE" , $str );
	$string = preg_replace( array('/[^A-Za-z0-9\-\/\.\ ]/' ) , array( '_' ) , $string );
	return $string;
}
