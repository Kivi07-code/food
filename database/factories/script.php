<?php


// connect to database

$mysqli = new mysqli('localhost', 'admin', 'admin_pass', 'list');

if($mysqli->connect_error !=0){
	echo $mysqli->connect_error;
	exit();
}

// setting the start from value
$start = 0;


//setting the number of rows to display in a page
$rows_per_page = 4;



$result = $mysqli->query("SELECT * FROM products LIMIT $start,$rows_per_page");