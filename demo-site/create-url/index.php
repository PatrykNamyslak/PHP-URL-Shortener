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
ini_set('display_errors','Off');
ini_set('error_reporting', E_ALL );
define('WP_DEBUG', false);
define('WP_DEBUG_DISPLAY', false);
require_once '../assets/functions.php';
$url = $_POST['url'];
if(filter_var($url, FILTER_VALIDATE_URL)){
    $ShortenedHash = generateRandomString(length:6);
    insertDataIntoDatabaseTable(connection:$database_connection, table:'links', data:[$url, $ShortenedHash], query:'INSERT INTO `links` (Url,UrlHash) VALUES (?,?)');
    // return the result to the user
    ?>
    <input type="text" class="result" readonly value="https://patl.ink/?url=<?php echo $ShortenedHash;?>" style="width:300px;">
    <?php
}else{
    // throw an error
    ?>
    <input type="text" class="result" readonly value="Invalid Link!">
    <?php
}

?>