<?php

session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}

include("phpsql/crud.php");

$registros = new exibeRegistros;

$registros->exibir();

?>