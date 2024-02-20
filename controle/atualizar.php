<?php

include '../conexao/conexao.php';
$conn = getConexao();

$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$nascimento = $_POST['nascimento'];
$telefone = $_POST['telefone'];

$sql = 'UPDATE candidato SET nome = :nome, email = :email, nascimento = :nascimento, telefone = :telefone WHERE id = :id';

$stmt = $conn->prepare($sql);
$stmt->bindParam(':id', $id);
$stmt->bindParam(':nome', $nome);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':nascimento', $nascimento);
$stmt->bindParam(':telefone', $telefone);

if($stmt->execute()) {
    header("Location: ../index.php");
} else {
    echo 'Não cadastrado';
}