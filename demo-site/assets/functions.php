<!--
 /$$$$$$$   /$$$$$$  /$$$$$$$$ /$$$$$$$  /$$     /$$ /$$   /$$        /$$   /$$  /$$$$$$  /$$      /$$ /$$     /$$ /$$$$$$  /$$        /$$$$$$  /$$   /$$
| $$__  $$ /$$__  $$|__  $$__/| $$__  $$|  $$   /$$/| $$  /$$/       | $$$ | $$ /$$__  $$| $$$    /$$$|  $$   /$$//$$__  $$| $$       /$$__  $$| $$  /$$/
| $$  \ $$| $$  \ $$   | $$   | $$  \ $$ \  $$ /$$/ | $$ /$$/        | $$$$| $$| $$  \ $$| $$$$  /$$$$ \  $$ /$$/| $$  \__/| $$      | $$  \ $$| $$ /$$/ 
| $$$$$$$/| $$$$$$$$   | $$   | $$$$$$$/  \  $$$$/  | $$$$$/         | $$ $$ $$| $$$$$$$$| $$ $$/$$ $$  \  $$$$/ |  $$$$$$ | $$      | $$$$$$$$| $$$$$/  
| $$____/ | $$__  $$   | $$   | $$__  $$   \  $$/   | $$  $$         | $$  $$$$| $$__  $$| $$  $$$| $$   \  $$/   \____  $$| $$      | $$__  $$| $$  $$  
| $$      | $$  | $$   | $$   | $$  \ $$    | $$    | $$\  $$        | $$\  $$$| $$  | $$| $$\  $ | $$    | $$    /$$  \ $$| $$      | $$  | $$| $$\  $$ 
| $$      | $$  | $$   | $$   | $$  | $$    | $$    | $$ \  $$       | $$ \  $$| $$  | $$| $$ \/  | $$    | $$   |  $$$$$$/| $$$$$$$$| $$  | $$| $$ \  $$
|__/      |__/  |__/   |__/   |__/  |__/    |__/    |__/  \__/       |__/  \__/|__/  |__/|__/     |__/    |__/    \______/ |________/|__/  |__/|__/  \__/ 

DO NOT REMOVE !!!
-->


<?php
$host = 'localhost';
$database = 'url_shortener';
$username = 'itzaver';
$password = 'Password123';
$isMobile = is_numeric(strpos(strtolower($_SERVER["HTTP_USER_AGENT"]), "mobile"));
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
        return TRUE;
    }catch (PDOException $e){
        // echo 'Something went wrong! ' . $e->getMessage();
        return FALSE;
    }
}

function fetchDataFromDatabaseTable($connection, $table){
    try{
        $stmt = $connection->query('SELECT * FROM `'.$table.'`');
        $fetchedData = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $Data = [];
        foreach ($fetchedData as $row){
            $Data = $row;
        }
        return $Data;
    }catch (PDOException $error){
        echo $error->getMessage();
    }
}

function generateRandomString($length){
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $characters = str_split($characters, 1);
    $randomString = '';
    for ($i = 0; $i < $length; $i++){
        $string .= $characters[rand(0, count($characters))];
    }
    return $string;
}

?>