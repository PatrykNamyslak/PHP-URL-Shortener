<?php

$url = $_POST['url'];
if(filter_var($url, FILTER_VALIDATE_URL)){
    $url = base64_encode($url);
    // $url = base64_decode($url); Decode when fetching
    $bytes = random_bytes(20);
    // return the result to the user
    ?>
    <input type="text" class="result" readonly value="<?php echo $url;?>">
    <?php
}else{
    // throw an error
    ?>
    <input type="text" class="result" readonly value="Invalid Link!">
    <?php
}

?>