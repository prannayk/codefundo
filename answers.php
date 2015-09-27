<?php 
	require('mysql.class.php');
	if(isset($_POST)){
		$my = new MySQL();
		unset($_POST['title']);
		if($my->Insert("answers",$_POST)){
			print_r('Answers Set!');
		}
	}
 ?>