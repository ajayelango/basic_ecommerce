<!DOCTYPE html>
<?php 
//header("Cache-Control: no cache");
//session_cache_limiter("private_no_expire");
session_start();
$session_username=(isset($_SESSION['login_username']))?$_SESSION['login_username']:'';

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mpdb";

$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt = $conn->prepare("SELECT * FROM items order by created_on desc");
  $stmt->execute();
	
  // set the resulting array to associative
  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<html lang="en">
<head>
<title> Market Place </title>
<style> 
#title {
	font-family: "Times New Roman", Times, serif;
}

.tab { 
	display: inline-block; 
	margin-left: 40px; 
} 
input[type=submit] {
width: 5%;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  font-size: 16px;
  background-repeat: no-repeat;
  padding: 12px 80px 12px 40px;
  transition: width 0.4s ease-in-out;
  text-align: center;
}

input[type=text] {
  width: 75%;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  font-size: 16px;
  background-color: white;
  background-position: 10px 10px; 
  background-repeat: no-repeat;
  padding: 12px 20px 12px 40px;
  transition: width 0.4s ease-in-out;
}

#items ul{
  list-style: none;
}

.horizontal { display: inline-block;
 
}

.fig {
    display: inline-block;
	margin-top: 1em;
	margin-bottom: 1em;
	margin-left: 10px;
	margin-right: 10px;
	border: 1px solid #ccc;
	padding: 15px;
	padding-bottom: 15px;
	border-radius: 10px;
	position:relative;
    //text-align:center;
}

.box {
   display: flex;
   align-items:center;
   width: 50%;
   margin: 0 auto;
}

.button1 {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  border-radius: 12px;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: #3e8e41;
}
span {
  display: block;
 
}

.fix-div{position:fixed; height:100%; width:100%; left:0; top:0; z-index:1;}
.wrapper{position:relative; z-index:2; margin:100% 0 0;}

.horizontal :hover .itemDescriptionProps .salePriceProps image-caption-text3 {
	box-shadow: none;
	-moz-box-shadow: none;
	-webkit-box-shadow: none;
	
}

.fig:hover {
	border: 0;
	-moz-box-shadow:2px 2px 7px 2px rgba(130,130,130,1),-1px -1px 7px 2px rgba(130,130,130,1);
	-webkit-box-shadow: 2px 2px 7px 2px rgba(130,130,130,.7),-1px -1px 7px 2px rgba(130,130,130,1);
	box-shadow: 2px 2px 7px 2px rgba(130,130,130,.7),-2px -2px 7px 2px rgba(130,130,130,1);
}

.salePriceProps {
	 font-size: 125%;
	 font-weight: bold;
}

.itemDescriptionProps {
	display: block;
	width: 200px;
	overflow: hidden;
	white-space: nowrap;
	text-overflow: ellipsis;
}

.likeButton {
     line-height: 1px;
     width: 45px;
     margin-top: 1px;
     margin-right: 2px;
     position:absolute;
     top:0;
     right:0;
	 padding: 0;
	 border: none;
	background: none;
 }
 
.likeButton:focus { outline: none; }
 
#likeIcon {
  width: 60%;
  height: 60%;
  cursor: pointer;
  fill: black;
}

</style>
</head>

<body>
<script src="https://apis.google.com/js/platform.js" async defer></script>
<meta name="google-signin-client_id" content="128429955556-fopggevef0vduqlibivft0gmo1rc21fe.apps.googleusercontent.com">
<center>
<div class="box">
	<h1><span>Market Place</span></h1>
    <img src="../assets/title.png" style="float: right;"></img>
	<button class="button1" onclick="loginCheck()">Sell</button>
	<!-- <div class="g-signin2" data-onsuccess="onSignIn"></div> 
	 <a href="#" onclick="signOut();">Sign out</a> -->
	<div class="dropdown">
		<button class="button1" id="login" onclick="loginDisplay()">Login</button>
		<div class="dropdown-content">
			<div id="my_ads"></div>
			<div id="logout"></div>
		</div>
	</div>
</div>
</center>

<form action="" method="post">
  <input type="text" id="search" name="search" placeholder="What would you like to buy?">
  <input type="submit" value="Search">
  <br>
</form>


<?php
	if (!empty($_REQUEST['search'])) {
		$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
		$search_term = $_REQUEST['search'];
		
		$stmt = $conn->prepare("SELECT * FROM items where item_description like '%".$search_term."%' or 
		item_type like '%".$search_term."%'" );
		$stmt->execute();

		// set the resulting array to associative
		$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
	} else {
		 $stmt = $conn->prepare("SELECT * FROM items order by created_on desc");
		 $stmt->execute();
	
		 // set the resulting array to associative
		 $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
	}
		
?>

<script type="text/javascript">
var session_username_js='<?php echo $session_username;?>';

if (session_username_js == '') {
document.getElementById("login").innerHTML = "Login";
}
else {
	document.getElementById("login").innerHTML = "Logged in as " + session_username_js;
	document.getElementById("my_ads").innerHTML = "<a href='my_ads.php'>My Ads</a>";
	document.getElementById("logout").innerHTML = "<a href='logout.php'>Logout</a>";	
}

function loginDisplay() {
	if (session_username_js == '') {
		window.location.href = "login.html";
	} 
}

function loginCheck() {
	if (session_username_js == '') {
		alert("Please login in order to sell");
	} else {
		window.location.href = "sell.php";
	}
}

function createdon() {
	var x = document.getElementsByClassName("image-caption-text3");	
	for (i = 0; i < x.length; i++) {
		var date = x[i].innerHTML;
		let js_date = Date.parse(date);
		let dateObj = new Date(js_date);
		let curr = new Date(Date.now());
		var diff = ((curr - dateObj)/86400000);
		var floor_diff = Math.floor(diff);
		const monthNames = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
		if (floor_diff == 0) {
			floor_diff_hours = Math.floor(diff * 24);
			if (floor_diff_hours == 0) {
				var mins = Math.floor(diff * 24 * 60);
				if (mins == 1) {
					x[i].innerHTML = mins + " min ago";
				} else {
					x[i].innerHTML = mins + " mins ago";
				}
			} else if (floor_diff_hours == 1) {
				x[i].innerHTML = floor_diff_hours + " hour ago";
			} else {
				x[i].innerHTML = floor_diff_hours + " hours ago";
			}
		} else if (floor_diff == 1) {
			x[i].innerHTML = "Yesterday";
		} else if ((floor_diff > 1) && (floor_diff < 7)) {			 
			x[i].innerHTML = Math.floor(diff) + " days ago";
		} else if ((floor_diff >= 7) && (floor_diff <= 365)) {
			x[i].innerHTML = monthNames[dateObj.getUTCMonth()] + " " + dateObj.getUTCDate();
		} else {
			x[i].innerHTML = monthNames[dateObj.getUTCMonth()] + " " + dateObj.getUTCDate() + " " + dateObj.getUTCFULLYear(); 
		}
	}
}

function onSignIn(googleUser) {
  var profile = googleUser.getBasicProfile();
  console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
  console.log('Name: ' + profile.getName());
  console.log('Image URL: ' + profile.getImageUrl());
  console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
}

 function signOut() {
    var auth2 = gapi.auth2.getAuthInstance();
    auth2.signOut().then(function () {
      console.log('User signed out.');
    });
	auth2.disconnect();
  }

</script>

<br><br>
<div id="items">
	<?php foreach($result as $row) { ?> 
	<div class="horizontal">
	<a style="text-decoration:none" href="ad_details.php?id=<?php echo $row['image_path']; ?>&description=<?php echo $row['item_description']; ?>&sellername=<?php echo $row['username']; ?>&sale_price=<?php echo $row['sale_price']; ?>&item_type=<?php echo $row['item_type']; ?>">
	 <div class="fig">
	 <figure>	
	  <img src="../uploads/<?php echo $row['image_path']; ?>" width="200" height="200" alt="item"></img>
	 </figure>
	 <span class="salePriceProps">₹ <?php echo $row['sale_price']; ?></span>
	 <span class="itemDescriptionProps"><?php echo $row['item_description']; ?></span> 
	 <span class="location" style="float:left"><?php echo $row['location']; ?></span> 
	 <span id="created_on" class="image-caption-text3" style="float:right"><?php echo $row['created_on']; ?></span>
	
	</a>
	<button class="likeButton"> 
		<svg id="likeIcon" viewBox="0 0 60 55">
			   <path d="M 24 47.001 c -0.173 0 -0.346 -0.045 -0.501 -0.135 c -0.239 -0.138 -5.913 -3.447 -11.678 -8.778 C 3.977 30.835 0 23.668 0 16.787 c 0 -9.275 6.279 -13.5 12.113 -13.5 c 4.499 0 9.53 2.572 11.887 8.229 c 2.357 -5.657 7.389 -8.229 11.887 -8.229 C 41.721 3.287 48 7.512 48 16.787 c 0 6.881 -3.977 14.048 -11.821 21.301 c -5.765 5.331 -11.439 8.641 -11.678 8.778 C 24.346 46.956 24.173 47.001 24 47.001 Z M 12.113 5.287 C 7.242 5.287 2 8.886 2 16.787 C 2 30.65 20.674 42.783 24 44.833 c 3.323 -2.051 22 -14.193 22 -28.046 c 0 -7.901 -5.242 -11.5 -10.113 -11.5 c -4.473 0 -9.58 3.062 -10.905 9.903 C 24.891 15.66 24.479 16 24 16 s -0.891 -0.34 -0.982 -0.81 C 21.693 8.35 16.586 5.287 12.113 5.287 Z" />
		</svg>
	</button>
	</div>
	</div>
	<?php } ?>
</div>
<script>
	createdon();
</script>
</body>
</html>