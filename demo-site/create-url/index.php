<?php
require_once '../assets/functions.php';
$url = $_POST['url'];
if(filter_var($url, FILTER_VALIDATE_URL)){
    $url = trim($url, 'https://');
    $url = trim($url, '/');
    echo $url;
    // $url = base64_encode($url);
    // insertDataIntoDatabaseTable(connection:$database_connection, table:'links', data:[base64_decode($url), $url], query:'INSERT INTO `links` (Url,UrlHash) VALUES (?,?)');
    // $url = base64_decode($url); Decode when fetching
    // return the result to the user
    ?>
    <input type="text" class="result" readonly value="https://patl.ink/?url=<?php print_r($url);?>">
    <?php
}else{
    // throw an error
    ?>
    <input type="text" class="result" readonly value="Invalid Link!">
    <?php
}

?>