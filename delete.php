<?php 
include 'connect.php';

$deleteid = $_GET['deleteid'];

$query = "DELETE FROM accounts WHERE id=$deleteid";

$result = $conn->query($query);

if ($result) {
    header("location: browse.php");
}

?>