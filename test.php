<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<style>
.box {
	position:relative;
	width:220px
}
.box a {
	display:block;
	border-radius:5px;
	background:#f00;
	color:#fff;
	padding:10px 10px 50px;
	text-align:center;
}
.box button {
	position:absolute;
	bottom:5px;
	right:0;
	left:0;
	margin:auto;
	text-align:center;
	width:100px;
	color:#fff;
	border-radius:4px;
	background:blue;
	color:#fff;
	padding:5px;
	border:none;
}
.box a:hover { background:#900 }
.box button:hover {
	background:#000;
	cursor:pointer
}
</style>
</head>

<body>
<script>
const createBase = function(num)
{
	function b(num) {
		return (6 + num);  
	}
	return b;
}

const addSix = createBase(6);
console.log(addSix(6)); // 12
console.log(addSix(5)); // 11
console.log(addSix(4)); // 10

</script>
</body>
</html>