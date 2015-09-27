<?php 
	// if(isset($_POST['title'])){
		// $t = $_POST['title'];
		$my = new MySQLi('localhost','root','root','codefundo') or die('fatal');
		$r = "SELECT COUNT(*) FROM information_schema.tables WHERE table_schema = 'codefundo' AND table_name = 'studesnt'";
		$q = $my->query($r) or die('fatal');
		if(!$q->lengths){
			
		}
		// print_r($count);
	// }else{
		// die('fatal');
	// }
 ?>