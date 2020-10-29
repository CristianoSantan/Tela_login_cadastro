<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastre-se</title>
    <link rel="stylesheet" href="./css/global.css" />
    <link rel="stylesheet" href="./css/cadastro.css" />

</head>

<body>
    <main>
        <div class="card">
            <h1>Cadastre-se</h1>
            <form action="cadastro_usuario.php" method="post">
                <input type="text" name="nome" placeholder="Digite seu nome">
                <input type="text" name="imagem" placeholder="imagem">
                <input type="email" name="email" placeholder="Digite seu e-mail">
                <input type="password" name="senha" placeholder="Digite sua senha">
                <input type="password" name="conf_senha" placeholder="Confirme sua senha">
                <button type="submit">Cadastre-se</button>
            </form>
            <a href="./index.php">Já possui cadastro? Realize o login</a>
        </div>
    </main>
</body>

</html>