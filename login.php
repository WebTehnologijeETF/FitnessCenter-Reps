<?php
session_start();
$message="";
if(count($_POST)>0) {
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
$sql = 'SELECT * FROM korisnik WHERE username="'.$_POST["username"].'" AND password="'. $_POST["password"].'"';
$result = $conn->query($sql);
if ( $result === FALSE ) $message = "Invalid Username or Password!";
else {
$row =  $result->fetch_assoc();
echo $row["id"];
$_SESSION["id"] = $row["id"];
$_SESSION["username"] = $row["username"];
}
}
if(isset($_SESSION["id"])) {
header("Location:dashboard.php");
}
?>
<html>
<head>
<title>User Login</title>
</head>
<body>
<form name="frmUser" method="POST" action="">
<div class="message"><?php if($message!="") { echo $message; } ?></div>
<table border="0" cellpadding="10" cellspacing="1" width="500" align="center">
<tr>
<td align="center" colspan="2">Enter Login Details</td>
</tr>
<tr>
<td align="right">Username</td>
<td><input type="text" name="username"/></td>
</tr>
<tr align="right">
<td align="right">Password</td>
<td align="left"><input type="password" name="password"/></td>
</tr>
<tr>
<td align="center" colspan="2"><input type="submit" name="submit" value="Submit"></td>
</tr>
</table>
</form>
</body></html>