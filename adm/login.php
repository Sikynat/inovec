<?php
include('../conn.php');

if(isset($_POST['login']) || isset($_POST['pass'])){
    if(strlen($_POST['login']) == 0){
        echo "preencha o campo Usuario";
    } else if (strlen($_POST['pass']) == 0){
        echo "preencha o campo Senha";
    } else {
        $login = $mysqli->real_escape_string($_POST['login']);
        $pass = $mysqli->real_escape_string($_POST['pass']);

        $sql_code = "SELECT * FROM usuarios WHERE user = '$login' AND pass = '$pass'";
        $sql_query = $mysqli->query($sql_code) or die("falha na execução do codigo sql: " . $mysqli->error);
        
        $quantidade = $sql_query->num_rows;

        if($quantidade == 1){
            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)){
                session_start();
            }
            $_SESSION['id'] = $usuario['id'];
            $_SESSION['user'] = $usuario['user'];

            header("Location: painel.php");
        }else{
            echo "email ou senha incorretos!";
        }
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
    <main>
        <h1>Acessar conta</h1>
        <form action="" method="post">
            <input type="text" name="login" placeholder="Usuario"></br>
            <input type="password" name="pass" placeholder="Senha"></br>
            <button type="submit" name="btn-login">Login</button>
        </form>
    </main>
</body>
</html>