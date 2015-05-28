<?php
session_start();
if(!empty($_SESSION["username"])) {
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "FitnessCenter";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM korisnik WHERE id<>0";
$result = $conn->query($sql);

		
if ($result->num_rows > 0) {
	
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo '<form action="obrisikorisnika.php" method="post"><input type="hidden" name="korisnik"/ value="'.$row["id"].'"><table>';
		echo '<tr><td><p>Username: <b>'.$row["username"].'</b></p></td></tr>';
		echo '<tr><td><p>Password: <b>'.$row["password"].'</b></p></td>';
		echo '</td></tr></table><input type="submit" value="Delete"/></form>';
    }
   
} else {
    echo "No users except for default are found in database!";
}
$conn->close();
}
else echo"Please login to access this page!";
?> 