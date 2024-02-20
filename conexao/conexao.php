<?php

function getConexao() {
    try{
        $pdo = new PDO(
            'mysql:host=localhost; dbname=testeestagio',
            'root',
            ''
        );
        return $pdo;
    } catch(PDOException $ex){
        echo 'Erro: '.$ex->getMessage();
    }
}