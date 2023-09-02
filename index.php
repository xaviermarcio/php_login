<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Login em PHP">
    <meta name="keywords" content="PHP,CSS,HTML,JAVASCRIPT">
    <link rel="stylesheet" href="css/style.css">
    <title>Login-PHP</title>
</head>
<body>
    <main class="container">
    <h2>LOGIN</h2>
        <form action="login.php" method="post">
            <div class="input-field">
                <input type="email" name="email" id="email" placeholder="Digite o seu email..." required>
                <div class="underline"></div>
            </div>
            <div class="input-field">
                <input type="password" name="senha" id="senha" placeholder="Digite asua senha..." required>
                <div class="underline"></div>
            </div>
            <input type="submit" value="Entrar">
        </form>    
   </main>
</body>
</html>