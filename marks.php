<?php 
	require('mysql.class.php');
	if(isset($_GET)){
		$my = new MySQL();
		unset($_GET['title']);
		if($my->Insert("marks",$_GET)){
			print_r('Marks Set!');
		}
	}
 ?>