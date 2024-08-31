<?php 
session_start();
$session_username=(isset($_SESSION['login_username']))?$_SESSION['login_username']:'';

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mpdb";

$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt = $conn->prepare("SELECT * FROM items where username = '".$session_username."'");
  $stmt->execute();
	
  // set the resulting array to associative
  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<HTML>
<style>
#items ul{
  list-style: none;
}

.horizontal { display: inline-block;}

figure {
    display: inline-block;
	margin-top: 1em;
	margin-bottom: 1em;
	margin-left: 40px;
	margin-right: 40px;
}
</style>
<h1> Your ads </h1>
<br><br>
<div id="items">
	<ul>
	<?php foreach($result as $row) { ?> 
	<li class="horizontal">
	<a href="www.google.com">
	 <figure class="fig">	
	  <img src="../uploads/<?php echo $row['image_path']; ?>" width="200" height="200" alt="item"></img>
	  <figcaption class="image-caption-text"><?php echo $row['item_description']; ?></figcaption>
	  <figcaption class="image-caption-text2">₹ <?php echo $row['sale_price']; ?> </figcaption>
	 </figure>
	</a>
	</li>
	<?php } ?>
	</ul>
</div>

</HTML>