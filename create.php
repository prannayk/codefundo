<?php  
	if(isset($_POST['tit'])){
		require("mysql.class.php");
		$mysql = new MySQL();
		$some = $_POST['tit'];
		$some2 = $_POST['count'];
		unset($_POST['count']);
		$mysql->Insert("code",$_POST);
		$my = new MySQLi('localhost','root','root','codefundo');
		$r = "SELECT COUNT(*) FROM information_schema.tables WHERE table_schema = 'codefundo' AND table_name = 'students'";
		$q = $my->query($r);
		$some3 = "";
		if($q){
			while($var = $q->fetch_object()){
				foreach ($var as $key => $value) {
					$some3 = $value;
				}
			}
		}
		if($some3==0 || $some3=="0"){
			$some2 = intval($some2);
			$que = "CREATE TABLE ".$some." ( id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY";
			for ($i=1; $i <= $some2 ; $i++) { 
				$que = $que . ", col".$i." VARCHAR(10) NOT NULL";
			}
			$que = $que . ")";
			if($my->query($que)){
				header("Location: user.php");
			}
		}
	}
?>