<?php
include("connect-after.php");
$deleteId = $_GET['deleteId'];
$query = "DELETE FROM interns WHERE id=$deleteId";
$run = mysqli_query($conn, $query);
header('location:display.php');
?>