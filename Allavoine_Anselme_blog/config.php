<?php 
    try 
    {
        $bdd = new PDO("mysql:host=localhost:3306;dbname=blog;charset=utf8", "root", "user");
    }
    catch(PDOException $e)
    {
        die('Erreur : '.$e->getMessage());
    }
