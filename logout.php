<?php 

    session_destroy();

    setcookie("PHPSESSID","",time()-3600); //apaga id da sessão
    //validade time do momento presente / o passado exclui um cookie automaticamente
    session_start();
    session_regenerate_id();
    unset($_SESSION['conectdo']);
    unset($_SESSION['login']);

    header("location: index.php");
?>