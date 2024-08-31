<?php
	try{
		session_start();
		$banner=$_FILES['uploadImage']['name']; 
		$expbanner=explode('.',$banner);
		$bannerexptype=$expbanner[1];
		date_default_timezone_set('Australia/Melbourne');
		$date = date('m/d/Yh:i:sa', time());
		$rand=rand(10000,99999);
		$encname=$date.$rand;
		$bannername=md5($encname).'.'.$bannerexptype;
		$bannerpath="../uploads/".$bannername;
		move_uploaded_file($_FILES["uploadImage"]["tmp_name"],$bannerpath);
		echo "Your image has been successfully uploaded";
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "mpdb";
		$login_username = $_SESSION['login_username'];
		$item_type = $_POST["item_type"];
		$item_description = $_POST["item_description"];
		$sale_price = $_POST["sale_price"];
		$location = $_POST["f_elem_city"];
		
		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$stmt2 = $conn->prepare("INSERT INTO items (username, item_type, item_description, image_path, sale_price, location) VALUES ('$login_username', '$item_type', '$item_description', '$bannername', '$sale_price', '$location')");
		$stmt2->execute();
		
		echo "\nImage path stored in database successfully\n";
		
	}
	catch(PDOException $e) {
		echo "Error: " . $e->getMessage();
	}
?>