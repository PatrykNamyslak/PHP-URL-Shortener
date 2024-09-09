<?php

$url = $_POST['url'];
if(filter_var($url, FILTER_VALIDATE_URL)){
    ?>
    <input type="text" class="result" readonly value="Its a Link!">
    <?php
}else{
    ?>
    <input type="text" class="result" readonly value="It is not a link!">
    <?php
}

?>