<?php

session_start();

$email = $_POST['email'];
$senha = md5($_POST['senha']); 

if (strlen($email) > 3 && strlen($senha) > 3) {
    $conn = mysqli_connect("localhost", "root", "", "sistema");

    // Execução da instrução SQL;
    $resulatado_consulta = $conn->query("SELECT * FROM usuarios where email = '$email' AND senha = '$senha'");

    // $usuarios recebe a lista de usuarios;
    $usuarios = mysqli_fetch_all($resulatado_consulta);

    // echo '<pre>';
    // print_r($usuarios);
    // echo '<pre>';

    // echo $usuarios[0][1] . '<br/>';
    // echo $usuarios[0][2] . '<br/>';
    // echo $usuarios[0][3] . '<br/>';

    $_SESSION['nome'] = $usuarios[0][1];
    $_SESSION['email'] = $usuarios[0][2];
    $_SESSION['senha'] = $usuarios[0][3];

    header('Location: home.php');
    
}
else {
    echo "
        <script>
            alert('Email ou senha inválidos!')
            location.href = 'index.php';
        </script>
    ";
}