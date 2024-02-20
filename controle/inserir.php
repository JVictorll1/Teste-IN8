<?php

include '../conexao/conexao.php';
$conn = getConexao();

$nome = $_POST['nome'];
$email = $_POST['email'];
$nascimento = $_POST['nascimento'];
$telefone = $_POST['telefone'];

$sql = 'INSERT INTO candidato(nome, email, nascimento, telefone) VALUES(:nome, :email, :nascimento, :telefone)';

$stmt = $conn->prepare($sql);
$stmt->bindParam(':nome', $nome);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':nascimento', $nascimento);
$stmt->bindParam(':telefone', $telefone);

if($stmt->execute()) {
    header("Location: ../index.php");
} else {
    echo 'Não cadastrado';
}