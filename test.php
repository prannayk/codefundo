<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
	require('mysql.class.php');
	$shit = new MySQL();
	$in = array('title' =>'go' ,'stylesheet'=>'go.css','script'=>'script.js','body'=>'<h1>Display</h1>' );
	var_dump($in);
	if($shit->Insert("code",$in)){
		print_r('roll');
	}
 ?>
</body>
</html>