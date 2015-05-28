<?php
session_start();
?>
<html>
<head>
<title>User Login</title>
<link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>
<table border="0" cellpadding="10" cellspacing="1" width="500" align="center">
<tr class="tableheader">
<td align="center">User Dashboard</td>
</tr>
<tr class="tablerow">
<td>
<?php
if(!empty($_SESSION["username"])) {
?>
<a href="izlistajnovosti.php">Novosti</a>
<a href="izlistajkomentare.php">Komentari</a>
<a href="izlistajkorisnike.php">Korisnici</a>
</br>
<?php
 echo $_SESSION["username"]; ?>, welcome. Click here to <a href="logout.php" tite="Logout">Logout.
<?php
}
else echo "You have to login to access this page!";
?>
</td>
</tr>
</body></html>