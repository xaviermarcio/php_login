<?php

include('./protect.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel</title>

   
</head>
<body>
    <div>
        <h2>Bem vindo ao Painel: <?php echo $_SESSION['nome']; ?></h2> 
        <a href="logout.php"><input type="submit" value="Sair"></a>
    </div>
</body>
</html>