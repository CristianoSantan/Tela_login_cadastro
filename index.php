<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Entre ou cadastre-se</title>
    <link rel="stylesheet" href="./css/global.css" />
    <link rel="stylesheet" href="./css/login.css" />
</head>

<body>
    <main>
        <section class="painel-login">
            <div class="card">
                <h1>Entre e cadastre-se</h1>
                <form action="login_usuario.php" method="post">
                    <input type="email" name="email" placeholder="Digite o seu e-mail" />
                    <input type="password" name="senha" placeholder="Digite a sua senha" />
                    <button type="submit">Entrar</button>
                </form>
                <a href="cadastro.php">Ainda não possui cadastro? clique aqui</a>
            </div>
        </section>
        <section class="painel-imagem">
            <img src="./images/login.svg" alt="Login" />
        </section>
    </main>
</body>

</html>