<?php 

include "insert.php";

$sql = "SELECT * FROM contents ORDER BY id";
$result = mysqli_query($connection, $sql);