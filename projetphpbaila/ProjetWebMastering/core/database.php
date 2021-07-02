<?php
    function open_connexion(){
        try {
            $pdo = new PDO('mysql:host=localhost;dbname=bd_webmastering', "root", "");
            //Activation de quelques attributs de pdo
            //permet d'activer le rapport d'erreur sur les requetes sql
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //activer le mode fetch à assoc
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            return $pdo;
        } catch (PDOException $ex) {
            die("Erreur de connexion à la base de donnée");
        }
    }
    function close_connexion($pdo){
        $pdo=null;
    }

?>