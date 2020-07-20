<?php

    $link = 'mysql:host=localhost;dbname=proyecto';
    $usuario = 'root';
    $pass= 'root';

    try{

        $pdo = new PDO($link,$usuario,$pass);
        //echo "CONECTADO";


    }catch(PDOException $e){


        print("Error!: ". $e->getMessage() ."<br/>");
        die();
    }
     
