<?php

require("conectar.php");

class entrar extends Livros{
    
    function login($user, $senha){
        
        $conn = livros::conecta();

        $sql= ("SELECT nome 
                FROM usuarios
                WHERE nome LIKE '".$user."' AND senha LIKE '".$senha."'"
                );

        $x = $conn->query($sql);

        if($x->num_rows > 0){
            return true;
        } else {
            return false;
        }
                
        $conn->close();

    }
}

?>