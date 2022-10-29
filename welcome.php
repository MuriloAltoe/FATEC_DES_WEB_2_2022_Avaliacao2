<?php

session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <h1>Bem vindo!</h1>
        <button><a href="registros.php">Registros</a></button><br/><br/>
        <button><a href="cadastrar.php">Cadastrar</a></button><br/><br/>
        <button><a href="logout.php">Logout</a></button>
    </center>
</body>
</html>