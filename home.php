<?php

    session_start();
    
    // Se não existir um valor no indice nome, então  encerre a aplicação
    if (!isset($_SESSION['nome'])) {
        header('Location: index.php');
        exit;
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>home</title>
</head>
<body>
    
    <h1>Olá, <?php echo $_SESSION['nome']; ?></h1>

</body>
</html>