<meta charset="uft-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">
<?php

session_name('user');
session_start();

$conn = new mysqli('localhost','root','root','lab2-PHP');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$navigation = <<< END
<nav>
	<a href="index.php">Hem</a>
	<a href="about.php">Om oss</a>
	<a href="login.php">Logga in</a>
</nav>
END;

?>