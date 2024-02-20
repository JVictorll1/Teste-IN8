<?php

include './conexao/conexao.php';

function mostrarCandidatos() {
    $conn = getConexao();
    $sql = "SELECT * FROM candidato";

    $stmt = $conn->prepare($sql);
    $stmt->execute();
    
    return $stmt->fetchAll();
}
