<?php
    include('protect.php');
    include('../conn.php');
    $consulta = "SELECT * FROM terrenos";
    $con = $mysqli->query($consulta) or die($mysqli->error);
?>

<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/painel.css">
</head>
<body>
    <header class="header">

        <a href="index.php" id="logo">Logo</a>
        <nav>
            <ul class="menu">
                <a href="#">
                    <li>Home</li>
                </a>
                <a href="upload.php">
                    <li>Publicar</li>
                </a>
                <a href="logout.php">
                    <li>Sair</li>
                </a>
            </ul>
         </nav>
    </header>
    <main>
    <h1>Bem vindo, <?php echo $_SESSION['user'];?></h1>

    </main>

</body>
</html>