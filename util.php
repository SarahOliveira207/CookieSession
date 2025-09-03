<?php
    function conectar($params = ""){
        if($param == ""){
            $params = "pgsql:localhost=localhost; port=5432; bdname =ecom; user= ;password=;";
        }
        try{
            $varConn = new PDO($params);
            return $varConn;
        }catch(PDOException $e){
            echo "Não foi possível conectar";
            exit;
        }
    }

?>