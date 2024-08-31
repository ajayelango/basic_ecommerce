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

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt = $conn->prepare("SELECT * FROM login where username='$login_username'");
  $stmt->execute();
	
  // set the resulting array to associative
  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
  
  if ($stmt->rowCount() == 0) {
	printf("Login Denied as username or password is incorrect");
  }
  foreach($result as $row) {
	if ($row['password'] != $login_password) {
		printf("Login Denied as username or password is incorrect");
	} else {
		
		// Storing username in session variable 
        $_SESSION['login_username'] = $login_username; 
              
        // Welcome message 
        $_SESSION['success'] = "You have logged in!";
		
		printf("Login successfull");
		header('location: index.php');
	}
  }
}
catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
$conn = null;
?>

</body>
</html>