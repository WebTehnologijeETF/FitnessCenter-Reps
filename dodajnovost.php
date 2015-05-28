<?php
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

$sql = 'INSERT INTO novost (Id, Vrijeme, Autor, Naslov, Url, Sazetak, Sadrzaj, Count )
VALUES (16, NOW(),'.$_POST["autor"].','.$_POST["naslov"].',,'.$_POST["sazetak"].','.$_POST["sadrzaj"].', 0)';

if ($conn->query($sql) === TRUE) {
    include('izlistajnovosti.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
?> 