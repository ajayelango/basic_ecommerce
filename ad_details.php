<?php
    if(isset($_GET["id"]) && isset($_GET["sellername"]) && isset($_GET["description"]))
    {
        $id = $_GET["id"];
        $sellername = $_GET["sellername"];
		$item_description = $_GET["description"];
		$sale_price = $_GET["sale_price"];
		$item_type = $_GET["item_type"];
		
    }
?>

<HTML>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<style>
#preview{
	margin-top: 10px;
	border:1px solid black;
	width:700px;
	height:700px;
	background-repeat: no-repeat;
	margin-left: auto;
	margin-right: auto;
}
#items{
	text-align: center;
}
#items img {	
	margin: 10px;
	display: block;
	 border: 2px solid #6A6462;
}
#items img:hover {
	 cursor: zoom-in;
	 border: 0;
	 -moz-box-shadow:2px 2px 7px 2px rgba(130,130,130,1),-1px -1px 7px 2px rgba(130,130,130,1);
	-webkit-box-shadow: 2px 2px 7px 2px rgba(130,130,130,.7),-1px -1px 7px 2px rgba(130,130,130,1);
	box-shadow: 2px 2px 7px 2px rgba(130,130,130,.7),-2px -2px 7px 2px rgba(130,130,130,1);
}

#seller_description {
	margin-top: 10px;
	border:1px solid grey;
	width:300px;
	height:200px;
	//margin-left: auto;
	//margin-right: auto;
}

@media screen and (max-width: 767px){
	#items img {
		display: inline-block;
	}
}
</style>
<body onload="init()">
  <h1><?php echo $item_type; ?></h1>
  <div class="container-fluid">
	<div class="row">
		<div id="items">
			<img id="zoom" src="../uploads/<?php echo $id; ?>" width="500" height="500" alt="item" onmousemove="zoomIn(event)" onmouseout="zoomOut()"></img>
		<h2><?php echo $item_description; ?></h2>
		<h3>₹ <?php echo $sale_price; ?></h3>
		</div>
		<div id="seller_description">
			<h4 style="font-family:verdana">Seller Information</h4>
			<h5> <?php echo $sellername; ?></h5>
		</div>
		<div id="preview"></div>		
  </div>
</div>
  
<script>

function init() {
  var pre = document.getElementById("preview");
  pre.style.visibility = "hidden";
}

 function zoomIn(event) {
  var pre = document.getElementById("preview");
  pre.style.visibility = "visible";
  pre.style.backgroundImage = "url('../uploads/<?php echo $id; ?>')";
  var posX = event.offsetX;
  var posY = event.offsetY;
  pre.style.backgroundPosition=(-posX)+"px "+(-posY)+"px";

}

function zoomOut() {
  var pre = document.getElementById("preview");
  pre.style.visibility = "hidden";
}
</script>
  
</body>
</HTML>