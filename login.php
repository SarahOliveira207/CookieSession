<html>
    <form action="" method="post">
        Nome: <br>
        <input type="text" name ="usuario" value=""> <br>
        Senha: <br>
        <input type="password" name="senha" value=""> <br>
        <input type="submit" value="Enviar">
    </form>

    <?php 
        session_start();
        
        if($_POST){
            $usuario = $_POST['usuario'];
            $senha = $_POST['senha'];
            
            if(($usuario == "irineu") and ($senha = 123)){
                echo "Conectado";
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