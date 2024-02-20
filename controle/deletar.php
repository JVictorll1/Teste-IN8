<?php

include '../conexao/conexao.php';
$conn = getConexao();

$id = $_POST['id'];

$sql = 'DELETE FROM candidato WHERE id = :id';

$stmt = $conn->prepare($sql);
$stmt->bindParam(':id', $id);

if($stmt->execute()) {
    header("Location: ../index.php");
} else {
    echo 'Não foi possível excluir!';
}