<?php

require ('connect.php');


function getArticle(){
    
    $mysql = connectDB();
    $id = $_GET["id"];
    $search = "SELECT * FROM games WHERE id = '$id'";
    $query = $mysql->query($search);
    while($row = $query->fetch_assoc()){
        $reply[] = $row;
    }
    return json_encode($reply);
}

?>