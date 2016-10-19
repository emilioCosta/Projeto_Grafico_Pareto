<?php
/* 
 * Arquivo de funções e variáveis 
 */

session_start();    

    function conexao()
    {
        //variáveis com informações do servidor de BD 
        $serverName = 'regulus';
        $uid = 'BD15179';
        $pwd = 'BD15179';
        $database = 'BD15179';
   
        //array para conexão com banco
        $conectInfo = array("UID"=>$uid, 
                            "Database"=>$database,
                            "PWD"=>$pwd);
        //estabelecendo conexão com o BD
        $conexao = sqlsrv_connect($serverName,$conectInfo);
        if (!$conexao) 
        {
            exit('Falha na conexão com o banco de dados');
        }
        return $conexao;
    }
    
