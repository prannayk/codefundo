<!DOCTYPE html>
<html>
<head>
	<title>Test</title>
	<script type="text/javascript" src="script/jq.js"></script>
	<link rel="stylesheet" type="text/css" href="css/test.css">
	<script type="text/javascript" src="script/work.js" id="main"></script>
</head>
<body>
	<?php  
		require("mysql.class.php");
		// $_POST['shit']='shit';
		// var_dump($_POST);
		$mysql = new MySQL();
		if($mysql->Insert("code",$_POST));
	?>
	<a href="#" id="txtadd">Text</a>
	<a href="#" id="textadd">Texarea</a>
	<a href="#" id="optadd">Option Box</a>
	<a href="#" id="radadd">Radio Button</a>
	<a href="#" id="checkadd">Checkbox</a>
	<div class="main">
	</div>
	<a href="#" id="submit">Save</a>
	<div id="hidden">
	<form id="target" method="POST" action="test.php">
		<input type="text" name="title" id="title" />
		<input type="text" name="stylesheet" id="stylesheet" />
		<input type="text" name="script" id="script" />
		<input type="text" name="body" id="body" />
	</form>
	</div>
</body>
</html>