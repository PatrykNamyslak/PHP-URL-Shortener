<?php

$url = $_POST['url'];
if(filter_var($url, FILTER_VALIDATE_URL)){
    ?>
    <input type="text" class="result" readonly value="[ADD THE RESULT HERE!]">
    <?php
}else{
    ?>
    <input type="text" class="result" readonly value="Invalid Link!">
    <?php
}

?>