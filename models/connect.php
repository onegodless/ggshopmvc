<?php

function connectDB(){
    $mysql = new mysqli("localhost", "ggshop_admin", "1234", "ggshop");
    return $mysql;
}

?>