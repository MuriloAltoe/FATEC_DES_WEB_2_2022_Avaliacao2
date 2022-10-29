<?php

    class Livros{
        function conecta(){
            
            require('dados_banco.php');

            $conn = new mysqli($servername, $username, $password, $dbname);

            if ($conn->connect_error) {
                die("Erro na conexão. Erro: " . $conn->connect_error);
            }

            return $conn;
        }
    }

?>