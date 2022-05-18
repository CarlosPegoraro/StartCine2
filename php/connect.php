<?php

/**
 * 
 * @return \PDO
 */

 function connect() {
    $host = 'localhost';
    $dbname = 'startcine';
    $username = 'root';
    $password = '';
    
    global $pdo;

    try 
    {
        $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        return $conn;
    } catch (PDOException $pe) 
    {
        die("Não foi possível se conectar ao banco de dados $dbname, erro:" . $pe->getMessage());
    }
 }

?>