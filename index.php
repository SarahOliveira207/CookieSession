<html>
    <head>
        <title>

        </title>
    </head>
    <body>

        <?php 
            session_start();
            if (isset($_SESSION['conectado']) and ($_SESSION['conectado'] == true)){ //existe esse variável e ela é true (valor true em login.php)
                $usuario = $_SESSION['login'];
                echo " Olá $usuario<br>
                    <a href='produtos.php'>Produtos</a>
                    <a href='usuarios.php'>Usuarios</a>
                    <a href='logout.php'>Sair</a>";
                    
            }else{
                echo "<a href='login.php'>Login</a>";
            }
            
        ?>
    
        
    </body>
</html>