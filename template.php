
<?php
session_name();
session_start();
// ini_set('display_errors',1);
// ini_set('display_startup_errors',1);
// error_reporting(-1);


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

if(isset($_SESSION['userID'])) {
	$navigation = <<< END
		<nav>
			Du är inloggad som {$_SESSION['userName']}<br>
			<a href="index.php">Hem</a>
			<a href="about.php">Om oss</a>
			<a href="logout.php">Logga ut</a>
		</nav>
END;
}

?>
<meta charset="uft-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/style.css">