<?php
    
	$terms = $_GET["terms"];
	$mysql = new mysqli("localhost", "ggshop_admin", "1234", "ggshop");
	$search = "SELECT name, price, image FROM games WHERE name LIKE '$terms%'";
	$query = $mysql->query($search);
	while($row = $query->fetch_assoc()){
	   $reply[] = $row;
	}
	echo json_encode($reply);
	
?>
