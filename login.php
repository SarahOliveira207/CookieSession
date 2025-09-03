<html>
    <form action="" method="post">
        Nome: <br>
        <?php
            $loginUsuario = (isset($_COOKIE['loginUsuario']) ? $_COOKIE['loginUsuario'] : "");
        ?>
        <input type="text" name ="usuario" value="<?php echo $loginUsuario;?>"> <br>
        Senha: <br>
        <input type="password" name="senha" value=""> <br>
        <input type="submit" value="Enviar">
    </form>

    <?php 
        session_start();
        
        if($_POST){
            include "util.php";
            $usuario = $_POST['usuario'];
            $senha = $_POST['senha'];
            $conn = conectar();
            $select = $conn->prepare("Select nome from usuario where usuario =:email and senha =:senha");
            $select->bindParam(":usuario",$usuario);
            $select->bindParam(":senha",$senha);

            $select->execute();

            $linha = $select->fetch();
            
            if($linha['nome']!=""){
                echo "Conectado";
                setcookie("loginUsuario", $usuario, time()+86400);
                echo "Usuario eh: $usuario <br> Senha eh: $senha";
            
                $_SESSION['conectado'] = true;
                $_SESSION['login'] = $usuario;
            }
            else {
                echo "Impossível conectar";
                $_SESSION['conectado'] = false;
                $_SESSION['login'] = "";
            }
            header("location: index.php");
        }
        
         

    ?>
</html>