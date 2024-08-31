<html lang="en">
<head>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="https://ajax.aspnetcdn.com/ajax/jquery.ui/1.10.3/themes/flick/jquery-ui.css" />
 <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>

<style>
.ui-autocomplete-loading { background: white url("/images/ui-anim_basic_16x16.gif") right center no-repeat; }

.outerBorder {
	background-color: white;
   width: 700px;
   height: 700px;
   border: 1px solid lightgrey;
   padding-left: 25px;
   margin: 25px;
   align-content:center;
   position: fixed;
   top: 5%;
   left: 25%;
   border-radius: 10px;
   //margin-top: -50px;
   //margin-left: -100px; 
}

.titleItemForSale {
	text-align: center;
}

.bottomBorder {
	border-bottom: 1px solid lightgrey;
	margin-left:-25px;
}

.inputItem {
	border: none;
	outline: none;
	background-color: white;
}

textarea {
   font-family: inherit;
   font-size: inherit;
}

.uploadImageLabel {
	color:#999;
}
.imageBox {
    border: 2px solid lightgrey;
    box-sizing: border-box;
    display: inline-block;
    height: 110px;
	width: 110px;
    vertical-align: top;
    margin: 0 8px 8px 0;
    cursor: pointer;
}

.imageUploadIcon{
    height:20px; 
    width:100px; 
    margin: -20px -50px; 
    position:relative;
    top:45%; 
    left:75%;
	
}

.imageUploadButton {
     line-height: 1px;
     width: 45px;
     margin-top: 1px;
     margin-right: 2px;
     position:relative;
     top:0;
     right:0;
	 padding: 0;
	 border: none;
	background: none;
 }
 
.imageUploadButton:focus { outline: none; }
 
#imageIconSVG {
	fill: lightgrey;
}

.file-upload {
    display: none;
}

.fill {
    //display: flex;
    justify-content: center;
    align-items: center;
    overflow: hidden;
}
.fill img {
    flex-shrink: 0;
    min-width: 100%;
    min-height: 100%;
}

.images {
	display: inline-block;	
}

</style>

<script type="text/javascript">
 
jQuery(function () 
 {
	 jQuery("#f_elem_city").autocomplete({
		source: function (request, response) {
		 jQuery.getJSON(
			"https://secure.geobytes.com/AutoCompleteCity?key=7c756203dbb38590a66e01a5a3e1ad96&callback=?&q="+request.term,
			function (data) {
			 response(data);
			}
		 );
		},
		minLength: 1,
		select: function (event, ui) {
		 var selectedObj = ui.item;
		 jQuery("#f_elem_city").val(selectedObj.value);
		 return false;
		},
		open: function () {
		 jQuery(this).removeClass("ui-corner-all").addClass("ui-corner-top");
		},
		close: function () {
		 jQuery(this).removeClass("ui-corner-top").addClass("ui-corner-all");
		}
	 });
	 jQuery("#f_elem_city").autocomplete("option", "delay", 100);
	});
	
	/*
	$(document).ready(function() {
		var readURL = function(input) {
			if (input.files && input.files[0]) {
				var reader = new FileReader();

				reader.onload = function (e) {
					$('.upload-pic').attr('src', e.target.result)
					.width(150).height('auto');
					$('#imageIconSVG').attr('display','none');
				}
		
				reader.readAsDataURL(input.files[0]);
			}
		}
		$(".file-upload").on('change', function(){
			readURL(this);
		});
		
		$(".imageBox").on('click', function() {
		   $(".file-upload").click();
		});
	});
  */
	
</script>

</head>
<body>


<form action="uploadItem.php" method="POST" enctype="multipart/form-data">
<div class="outerBorder">
  <div class="titleItemForSale">
	<h1>POST AD</h1>
  </div>
  <div class="bottomBorder"> 
  </div>
  <br>
  <input type="text" id="item_type" class="inputItem" name="item_type"
  size="90" placeholder="Item Category"><br><br>
  <div class="bottomBorder"> 
  </div>
  <br>
   <input type="text" id="item_title" class="inputItem" name="item_type"
  size="90" placeholder="Title"><br><br>
  <div class="bottomBorder"> 
  </div>
  <br>
  <textarea id="item_description" class="inputItem" rows="7" cols="80" name="item_description" placeholder="Description (Optional)" style="border: none; resize: none" ></textarea><br><br>
  <div class="bottomBorder"> 
  </div>
  <br>
  <input type="text" id="sale_price" class="inputItem" name="sale_price"placeholder="Sale Price"><br><br>
  <div class="bottomBorder"> 
  </div>
  <br>
   <input class="ff_elem inputItem" type="text" name="f_elem_city" value="" id="f_elem_city" placeholder="Location"/><br><br>
  <div class="bottomBorder"> 
  </div>
  <br>
  <label class="uploadImageLabel">Upload an image</label><br><br>
  <!--
  <div class="images">
  <div class="imageBox fill" id="imageBox1">
	<div class="imageUploadIcon">
		<span class="btn imageUploadButton">
		<svg id="imageIconSVG" width="50px" height="50px" viewBox="0 0 100 100">
			<path d="M80.2,67.7c-0.4,0.4-1,0.4-1.4,0l-3.2-3.2v10c0,0.5-0.4,1-1,1c-0.6,0-1-0.5-1-1v-10l-3.2,3.2c-0.2,0.2-0.5,0.3-0.7,0.3   c-0.3,0-0.5-0.1-0.7-0.3c-0.4-0.4-0.4-1,0-1.4l4.9-4.9c0.1-0.1,0.2-0.2,0.3-0.2c0.2-0.1,0.5-0.1,0.8,0c0.1,0,0.2,0.1,0.3,0.2   l4.9,4.9C80.6,66.7,80.6,67.3,80.2,67.7z"/>
			<path d="M31,38.2c-3.5,0-6.4-2.8-6.4-6.4c0-3.5,2.8-6.3,6.4-6.3c3.5,0,6.3,2.8,6.3,6.3C37.3,35.4,34.5,38.2,31,38.2z"/>
			<path d="M75.6,54.6V21.2c0-1.6-1.3-3-3-3H16.2c-1.7,0-3,1.4-3,3v45.1c0,1.6,1.3,3,3,3h44.7c0.5,7.1,6.5,12.8,13.7,12.8   c7.6,0,13.8-6.2,13.8-13.8C88.3,61.1,82.7,55.1,75.6,54.6z M15.2,21.2c0-0.5,0.4-1,1-1h56.4c0.6,0,1,0.5,1,1v29.3L59,37.7  c-0.4-0.3-1-0.3-1.3,0L40.1,54.1l-8.1-8c-0.3-0.3-0.9-0.4-1.3-0.1L15.2,57.3V21.2z M74.6,80.1c-6.5,0-11.7-5.3-11.7-11.8   c0-6.5,5.3-11.8,11.7-11.8c6.5,0,11.8,5.3,11.8,11.8C86.3,74.8,81.1,80.1,74.6,80.1z"/>
		</svg>
		</span>
	</div>
  <img src="" alt="" class="upload-pic" style="width:150px;height:auto;"/>
  </div>
  <input type="file" class="file-upload" id="uploadImage" name="uploadImage"/>
  -->

  <input type="file" id="uploadImage" name="uploadImage">
   <br><br><br>
  <input type="submit" value="Upload" name="submit" style="display: block; margin: 0 auto;">
  
  </div>
 </div>

</form>

<!--

<form action="uploadItem.php" method="POST" enctype="multipart/form-data">
  <label for="item_type">What type of item is this?</label><br>
  <input type="text" id="item_type" name="item_type"><br><br>
  <label for="item_description">Description of the item</label><br>
  <textarea id="item_description" rows="10" cols="50" name="item_description"></textarea><br><br>
  <label for="item_image">Upload an image of the item</label><br>
  <input type="file" id="uploadImage" name="uploadImage"><br><br>
  <label for="sale_price">Selling Price? (Rs.) </label><br>
  <input type="text" id="sale_price" name="sale_price"><br><br>
  <label for="location">Location </label><br>
	
  <input class="ff_elem" type="text" name="f_elem_city" value="" id="f_elem_city"/>
  <br><br><br>
  <input type="submit" value="Upload Image" name="submit">
</form>

-->

</body>
</html>