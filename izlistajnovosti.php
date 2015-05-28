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

$sql = "SELECT * FROM novost";
$result = $conn->query($sql);

		
if ($result->num_rows > 0) {
	
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo '<form action="obrisinovost.php" method="post"><input type="hidden" name="novost"/ value="'.$row["Id"].'"><h3>'.$row["Naslov"].'</h3><table bor>';
		echo '<tr><td><p><b>'.$row["Autor"].'</b></p></td></tr>';
		echo '<td><div class="vrijeme">'.$row["Vrijeme"].'</div></td></tr></table>';
		echo '<input type="submit" value="Delete"/></form>';
    }

   
} else {
    echo "0 results";
}
$conn->close();
}
else echo"Please login to access this page!";
?> 