<?php

    function connectToDB()
    {
        try{
            $pdo_config = [ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
            $pdo = new PDO('mysql:host=127.0.0.1;dbname=graduation', 'root', 'root', $pdo_config);
        }catch(PDOException $e) {
            echo $e->getMessage();
            die();
        }
        return $pdo;
    }
