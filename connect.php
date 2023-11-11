<?php 
$conn  = new mysqli("localhost","root","","passwordmanager");

if(!$conn) {
    echo die(mysqli_error($conn));
}
?>