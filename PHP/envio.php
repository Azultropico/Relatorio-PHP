<?php
    include_once("conexao.php");
    $nome_usuario = $_POST['nome'];
    $sobrenome_usuario = $_POST['sobrenome'];
    $email_usuario = $_POST['email'];

    $result_usuario = "INSERT INTO usuarios(nome, sobrenome, email) VALUES ('$nome_usuario', '$sobrenome_usuario', '$email_usuario')";
    $resultado_usuario = mysqli_query($conn, $result_usuario);

?>