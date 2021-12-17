<?php
    include ("conn.php");
    $pag = $_GET['id'];
    $consulta = "SELECT * FROM terrenos WHERE id = '$pag'";
    $con = $mysqli->query($consulta) or die($mysqli->error);

    
?>

<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/terreno.css">
</head>
<body>
<header class="header">
                <a href="index.php" id="logo">Logo</a>
        <nav>
            <ul class="menu">
                <a href="index.php">
                    <li>Home</li>
                </a>
                <a href="#">
                    <li>Sobre</li>
                </a>
                <a href="#">
                    <li>Terrenos</li>
                </a>
                <a href="#">
                    <li>Contato</li>
                </a>
            </ul>
         </nav>
    </header>

    <main>
        <div id="terreno">
             <?php while($dado = $con->fetch_array()){ ?>
            
            
            <h1 id="title"><?php echo $dado["titulo"];?></h1>
            <img src="terrenos/<?php echo $dado["foto"];?>" alt="" srcset="">
            <p id="desc"><?php echo $dado["descricao"];?></p>
            <h3>Valor: R$<?php echo $dado["valor"];?></h3>
            <h3>Categoria: <?php echo $dado["categoria"];?></h3>
            <h3>Contato: 16994051331</h3>

            <?php } ?>
        </div>
        
    </main>

</body>
</html>