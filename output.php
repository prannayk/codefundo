<?php 
	// require('mysql.class.php');
	$mys = new MySQLi('localhost','root','root','codefundo');
	$q = "SELECT * FROM code WHERE id=9";
	$res = $mys->query($q) or die('fatal');
	$result = array();
	if($res){
		while($s = $res->fetch_object()){
			print_r($s);
			// $result['title'] =	$s['title'];
			// $result['style'] =	$s['style'];
			// $result['title'] =	$s['title'];
			// $result['title'] =	$s['title']; 
			// print_r($s['body']);
		}
	}
 ?>