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

$sql = 'SELECT * FROM komentar WHERE novost ='.$_POST["novost"];
$result = $conn->query($sql);

		
if ($result->num_rows > 0) {
	
    // output data of each row
    while($row = $result->fetch_assoc()) {
		echo '<html><head><link rel="stylesheet" type="text/css" href="stil.css"></head><body bgcolor="grey">';
		echo '<b>'.$row["Autor"].'</b> <a href="mailto:'.$row["Email"].'">'.$row["Email"].'</a></p>';
		echo '<div class="vrijeme">'.$row["Vrijeme"].'</div>';
		echo '<div class="novost">'.$row["Tekst"].'</div>';
	
    }
	
	echo '<form action="posaljikomentar.php" method="post"><input type="hidden" name="novost" value="'.$_POST["novost"].'"/><label>Ime:</label><input type="text" name="ime"/></br><label>Email:</label><input type="text" name="email"/></br><label>Komentar:</label><textarea name="tekst"></textarea></br><label></label><input type="submit" Value="Posalji komentar"/></form>';
   	echo '</body></html>';
} else {
    echo "0 results";
}
$conn->close();
?> 