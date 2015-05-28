<?php
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

$sql = 'INSERT INTO komentar (Id, Vrijeme, Autor, Email, Tekst, Novost )
VALUES (16, NOW(),'.$_POST["ime"].','.$_POST["email"].','.$_POST["tekst"].','.$_POST["novost"].')';

if ($conn->query($sql) === TRUE) {
    $sql = "UPDATE novost SET Count=Count+1 WHERE id=".$_POST["novost"];

if ($conn->query($sql) === TRUE) {
    header('Location: index.php');
} else {
    echo "Error updating record: " . $conn->error;
}
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?> 