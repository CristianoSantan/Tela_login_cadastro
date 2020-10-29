<?php

/*
    2 - Validação dos dados.
    3 - Cadastro em banco de dados.
    4 - Desafio de trativa do email.
*/

$nome = $_POST['nome'];
$imagem = $_POST['imagem'];
$email = $_POST['email'];
$senha = md5($_POST['senha']);  // Senha criptografada usando md5;
$conf_senha = md5($_POST['conf_senha']);


if (strlen($nome) > 3 && strlen($email) > 3 && strlen($senha) > 3 && $senha == $conf_senha) {
    $senha_cripto = md5($senha);

    $conn = mysqli_connect("localhost", "root", "", "sistema");

    $sql = "INSERT INTO usuarios (nome, imagem, email, senha) values ('$nome', '$imagem', '$email', '$senha_cripto')";

    $conn->query($sql);

    echo "<script> 
            alert('Cadastro efetuado')
            window.location.href = 'index.php'
        </script>";
}
else if ($senha != $conf_senha) {
    echo "<script> 
            alert('As senhas devem ser iguais, tente novamente!')
            window.location.href = 'cadastro.php'
        </script>";
}
else if (strlen($nome) <= 3) {
    echo "<script> 
            alert('Digite um nome válido para realizar o cadastro')
            window.location.href = 'cadastro.php'
        </script>";
}
else if (strlen($email) <= 3) {
    echo "<script> 
            alert('Digite um e-mail válido para realziar o cadastro.')
            window.location.href = 'cadastro.php'
        </script>";
}
else if (strlen($senha) <= 3) {
    echo "<script> 
            alert('Digite uma senha válida para realizar o cadastro')
            window.location.href = 'cadastro.php'
        </script>";
}
