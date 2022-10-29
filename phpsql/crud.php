<?php

require_once('conectar.php');

    class exibeRegistros extends Livros{

        function exibir(){

            $conn = livros::conecta();

            $sql = "SELECT autor, nomedolivro, quantidade 
                    FROM livro";

            $x = $conn->query($sql);

            if ($x->num_rows > 0) {
                echo "<table><tr><th>Nome do Autor</th> <th>Nome do livro</th> <th>Quantidade</th></tr>";
                // output data of each row
                while($row = $x->fetch_assoc()) {
                    echo "<tr><td>".$row["autor"]."</td><td>".$row["nomedolivro"]."</td><td>".$row["quantidade"]."</td></tr>";
                }
                echo "</table>";
            } else {
                echo "0 resultados";
            }

            $conn->close();
        }

    }

    class insert extends Livros{

        function inserir($aut, $nom, $qtd){
            $conn = livros::conecta();

            $sql = "INSERT INTO livro (autor, nomedolivro, quantidade) 
                    VALUES ('".$aut."', '".$nom."','".$qtd."')";

            $conn->query($sql);

            $conn->close();
        }

    }


?>
