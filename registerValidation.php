<html>
<body>

<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mpdb";
$logged_in = false;

$login_username = $_POST["username"];
$login_password = $_POST["password"];
$login_repassword = $_POST["repassword"];

try {
   	
  if ($login_password != $login_repassword) {
	printf("Passwords do not match");
	return;
	// header('location: register.php');
  }
	
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt = $conn->prepare("SELECT * FROM login where username='$login_username'");
  $stmt->execute();
	
  // set the resulting array to associative
  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
  
  if ($stmt->rowCount() > 0) {
	printf("Username already exists in the database");
  } else {
	$stmt2 = $conn->prepare("INSERT INTO login (username, password) VALUES ('$login_username', '$login_password')");
	$stmt2->execute();
	echo "Registration successfull";
	// Storing username in session variable 
    $_SESSION['login_username'] = $login_username; 
    header('location: index.php');
  }
}
catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
$conn = null;
?>

</body>
</html>