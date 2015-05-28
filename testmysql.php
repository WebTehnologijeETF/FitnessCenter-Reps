<?php
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
        echo '<form action="komentari.php" method="post"><input type="hidden" name="novost"/ value="'.$row["Id"].'"><h3>'.$row["Naslov"].'</h3>';
		echo '<p><b>'.$row["Autor"].'</b></p>';
		echo '<div class="vrijeme">'.$row["Vrijeme"].'</div>';
		echo '<div class="novost">'.$row["Sazetak"];
		echo '<a href="index.html" class="detalji">Detaljnije...</a></div>';
		echo '<input type="submit" value="Komentari('.$row["Count"].')"/></form>';
    }
   
} else {
    echo "0 results";
}
$conn->close();
?> 