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


<!DOCTYPE html>
<?php
ini_set('display_errors','Off');
ini_set('error_reporting', E_ALL );
define('WP_DEBUG', false);
define('WP_DEBUG_DISPLAY', false);
require_once './assets/functions.php';
?>
<html lang="en">
<head>
<script src="https://unpkg.com/htmx.org@2.0.2" integrity="sha384-Y7hw+L/jvKeWIRRkqWYfPcvVxHzVzn5REgzbawhxAuQGwX1XWe70vji+VSeHOThJ" crossorigin="anonymous" type="text/javascript"></script>
<script src="https://unpkg.com/hyperscript.org@0.9.12" type="text/javascript"></script>
<script src="https://code.jquery.com/jquery-1.12.4.min.js" type="text/javascript"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP URL Shortener</title>
</head>
<body>
    <?php 
    if (!$_GET['url']){
        ?>
    <h1>PHP URL Shortener</h1>
    <form hx-post="./create-url/index.php" hx-target="input.result" hx-swap="outerHTML">
        <input type="text" name="url" required>
        <button type="submit">Shorten URL</button>
    </form>
    <input type="text" class="result" readonly value="Your Link will appear here!">
    <?php
    }else{
        $Urls[] = fetchDataFromDatabaseTable(connection: $database_connection, table:'links');
        $HashedUrls = array_column($Urls, 'UrlHash');
        $Urls = array_column($Urls, 'Url');
        if(in_array($_GET['url'], $HashedUrls)){
            $appearanceID = array_search($_GET['url'], $HashedUrls);
            $destination = $Urls[$appearanceID];
            header('location:'.$destination);
            exit;
        }else{
            echo 'Invalid Link!';
        }
    }
    ?>

</body>
</html>