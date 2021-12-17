<?php
    include ("conn.php");
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
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    
    
    <div class="image">
        
    <header class="header">
                <a href="index.php" id="logo">Logo</a>
        <nav>
            <ul class="menu">
                <a href="#">
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
        <div class="container">
            
            <h1><span>Inove C Imoveis</span></h1>
            <span class="des">Imobiliaria</span>
        </div>
    </div>
    
        <main>
            <div class="content">
                <h1>Terrenos</h1>
                <section class="terrenos">
                    <?php while($dado = $con->fetch_array()){ ?>

                    
                    <div class="terreno">
                        <a href="terreno.php?id=<?php echo $dado["id"];?>"><img src="terrenos/<?php echo $dado["foto"];?>" alt=""></a>
                        <p><?php echo $dado["titulo"];?></p>

                        
                    </div>

                    <?php } ?>
                </section>
            </div>
        </main>

        <footer>
            <div class="footer-content">
                <h3 class="footer-content">Inove C Imoveis &copy; 2022</h3>
            </div>

            <div>
                <p>Contato: 16994051331 </br> inove.c.imoveis@gmail.com </br> R: Estavão Leão Burroul, 1378 </br> CEP: 14.400-750 - Centro - Franca SP</p>
            </div>
        </footer>
</body>
</html>