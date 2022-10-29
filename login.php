<?php

include("phpsql/login.php");

if($_SERVER["REQUEST_METHOD"] == "POST"){
    session_start();

    $entrar = new entrar;

    $confirma = $entrar->login($_POST['usuario'],$_POST['senha']);
    
    if($confirma = true){
        $_SESSION['loggedin'] = TRUE;
        header("location: welcome.php");
    } else {
        $_SESSION['loggedin'] = FALSE;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prova - Murilo</title>
</head>
<body>
    <center>
        <h2>Entrar</h2>

        
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
            <h3>Usuário:</h3>
            <input type="text" name="usuario">

            <h3>Senha:</h3>
            <input type="text" name="senha">

            <br/><br/>
            <input type="submit" value="Entrar">
        </form>

    </center>
</body>
</html>