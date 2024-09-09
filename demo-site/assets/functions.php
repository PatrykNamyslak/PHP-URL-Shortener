<?php
$host = 'localhost';
$database = 'url_shortener';
$username = 'itzaver';
$password = 'Password123';
// made using XAMPP! Use your own credentials!


function database_connection($host, $database, $username, $password){
    try{
        $database_connection = new PDO("mysql:host=$host;dbname=$database;", $username, $password);
        $database_connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $database_connection;
    }catch (PDOException $e){
        echo 'Connection Failed ' . $e->getMessage();
    }
}
$database_connection = database_connection(host:$host,database:$database,username:$username,password:$password);

function insertDataIntoDatabaseTable($connection, $table, $data, $query){
    try{
        $stmt = $connection->prepare($query);
        $stmt->execute($data);
    }catch (PDOException $e){
        echo 'Something went wrong! ' . $e->getMessage();
    }
}


?>