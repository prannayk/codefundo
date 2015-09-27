<?php 
	require('mysql.class.php');
	if(isset($_GET)){
		$my = new MySQL();
		$myo = new MySQLi('localhost','root','root','codefundo');
		$some = $_GET['title'];
		unset($_GET['title']);
		if($my->Insert("marks",$_GET)){
			print_r('Marks Set!');
		}
		evulato($some);
	}
 ?>