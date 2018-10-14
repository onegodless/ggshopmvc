<?php

    include ('connect.php');

    $mysql = connectDB();
	$terms = $_GET["terms"];
	$search = "SELECT id, name, price, image FROM games WHERE name LIKE '$terms%'";
	$query = $mysql->query($search);
	while($row = $query->fetch_assoc()){
	   $reply[] = $row;
	}
	echo json_encode($reply);
	
?>
