<?php
require '../config.php';
$id = $_REQUEST['idevento'];



$evento = [];
if ($id) {
    $sql = $pdo->prepare("SELECT * FROM eventos where idevento = :idevento");
    $sql->bindValue(':idevento', $id);
    $sql->execute();
    if ($sql->rowCount() > 0) {
        $evento = $sql->fetch(PDO::FETCH_ASSOC);
    }
    print_r($evento['nome']);
}
$nome = filter_input(INPUT_POST, 'nome');
$email = filter_input(INPUT_POST, 'email');
$cpf = filter_input(INPUT_POST, 'cpf');
$telefone = filter_input(INPUT_POST, 'telefone');

if ($nome && $email && $cpf && $cpf) {

    $sql = $pdo->prepare("INSERT INTO registro_evento (nome_evento, data_evento, nome_usuario, cpf_usuario, email_usuario, telefone_usuario) VALUES(:nome_evento, :data_evento, :nome_usuario, :cpf_usuario, :email_usuario, :telefone_usuario)");
    $sql->bindValue(':nome_evento', $evento['nome']);
    $sql->bindValue(':data_evento', $evento['data']);
    $sql->bindValue(':nome_usuario', $nome);
    $sql->bindValue(':cpf_usuario', $cpf);
    $sql->bindValue(':email_usuario', $email);
    $sql->bindValue(':telefone_usuario', $telefone);
    $sql->execute();
    if ($sql->rowCount() > 0) {
        header("Location:cadastro_success.php");
    } else {
        header("Location:cadastro_failed.php");
    }
} else {
    header("Location:cadastro_failed.php");
}
