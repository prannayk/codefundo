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
		// if(isset($_POST['tit'])){
		// 	require("mysql.class.php");
		// 	$mysql = new MySQL();
		// 	$some = $_POST['tit'];
		// 	$some2 = $_POST['count'];
		// 	unset($_POST['count']);
		// 	$mysql->Insert("code",$_POST);
		// 	$my = new MySQLi('localhost','root','root','codefundo');
		// 	$r = "SELECT COUNT(*) FROM information_schema.tables WHERE table_schema = 'codefundo' AND table_name = 'students'";
		// 	$q = $my->query($r);
		// 	$some3 = "";
		// 	if($q){
		// 		while($var = $q->fetch_object()){
		// 			foreach ($var as $key => $value) {
		// 				$some3 = $value;
		// 			}
		// 		}
		// 	}
		// 	if($some3==0 || $some3=="0"){
		// 		$some2 = intval($some2);
		// 		$que = "CREATE TABLE ".$some." ( id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY";
		// 		for ($i=1; $i <= $some2 ; $i++) { 
		// 			$que = $que . ", col".$i." VARCHAR(10) NOT NULL";
		// 		}
		// 		$que = $que . ")";
		// 		if($my->query($que)){
		// 			header("Location: user.php");
		// 		}
		// 	}
		// }
	?>
	<a href="#" id="txtadd">Text</a>
	<a href="#" id="textadd">Texarea</a>
	<a href="#" id="optadd">Option Box</a>
	<a href="#" id="radadd">Radio Button</a>
	<a href="#" id="checkadd">Checkbox</a>
	<div class="main">
	<input type="text" id="hiddn" value="" placeholder="title" />
	</div>
	<a href="#" id="submit">Save</a>
	<div id="hidden">
	<form id="target" method="POST" action="create.php">
		<input type="text" name="title" id="title" />
		<input type="text" name="stylesheet" id="stylesheet" />
		<input type="text" name="script" id="script" />
		<input type="text" name="body" id="body" />
		<input type="text" name="tit" id="tit" />
		<input type="text" name="count" id="count" />
	</form>
	</div>
</body>
</html>