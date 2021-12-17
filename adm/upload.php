<?php
include('protect.php');
include('../conn.php');

    $msg = false;
    if(isset($_FILES['arquivo'])){
        $extensao = strtolower(substr($_FILES['arquivo']['name'], -4));
        $novo_nome = md5(time()). $extensao;
        $diretorio = "../terrenos/";


        $vTitulo = $_POST["titulo"];
        $vDesc = $_POST["descp"];
        $vCat = $_POST["categ"];
        $vValue = $_POST["valor"];

        move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$novo_nome);

        $sql_code = "INSERT INTO terrenos (id, titulo, descricao, categoria, valor, foto) VALUES(null, '$vTitulo', '$vDesc', '$vCat', '$vValue', '$novo_nome')";
        if($mysqli->query($sql_code)){
            $msg = "arquivo enviado com sucesso!";
            header('Location: ../index.php');
        } else {
            $msg = "falha ao enviar arquivo!";

        }
    }
?>

<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Fazer publicação</h1>
    <?php if($msg != false) echo "<p> $msg </p>"; ?>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <input type="text" name="titulo" id=""  placeholder="Titulo"></br>
        <input type="text" name="descp" id=""  placeholder="descrição"></br>
        <input type="text" name="categ" id=""  placeholder="Categoria"></br>
        <input type="text" name="valor" id=""  placeholder="Valor"></br>
        <input type="file" name="arquivo" id="" ></br>
        <input type="submit" value="Publicar">
    </form>
</body>
</html>