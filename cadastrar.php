<?php

session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

require_once "phpsql/crud.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $insert = new Insert;


        $autor=$_POST['autor'];
        $nomedolivro=$_POST['nomedolivro'];
        $quantidade=$_POST['quantidade'];



        $insert->inserir($autor,$nomedolivro,$quantidade);

    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

    <h2>Autor:</h2>
    <input type="text" name="autor" id="autor">

    <h2>Nome do livro:</h2>
    <input type="text" name="nomedolivro" id="nomedolivro">

    <h2>Quantidade:</h2>
    <input type="text" name="quantidade" id="quantidade">

    <input type="submit" value="post">

    </form>
</body>
</html>