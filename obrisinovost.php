<?php
session_start();
if(!empty($_SESSION["username"])) {
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "fitnesscenter";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql to delete a record
$sql = "DELETE FROM novost WHERE id=".$_POST["novost"];

if ($conn->query($sql) === TRUE) {
    echo "Record deleted successfully";
	header("Location:izlistajnovosti.php");
} else {
    echo "Error deleting record: " . $conn->error;
}


$conn->close();
}
else echo"Please login to access this page!";
?> 