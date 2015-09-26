<?php  
	$studentid = 0;
	if(isset($_POST['incoming'])){
		require('mysql.class.php');
		$my = new MySQL();
		unset($_POST['incoming']);
		$_POST['password'] = md5($_POST['password']);
		// var_dump($_POST);
		$my->Select("student",array('studentid'),$_POST);
		if($my->iAffected){
			// print_r('expression');
			$work = new MySQLi('localhost','root','root','codefundo') or die('fatal');
			$work = $work->query('SELECT studentid FROM student WHERE username="'.$_POST['username'].'"') or die('fatal');
			$res;
			if($work){
				while($r = $work->fetch_object()){
					$res = $r->studentid;
				}
			}
			if($res!=0) $studentid = $res;
			header('Location: output.php');
		}
		setcookie('studentid',"",time()-1,'/');
		setcookie('studentid',$studentid,time() + 86400,"/");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Simulation</title>
</head>
<body>
<?php 
	var_dump($_COOKIE);
?>
<form method="POST" action="user.php">
	<input type="text" name="username" placeholder="Username" />
	<input type="password" name="password" placeholder="Password" />
	<input type="hidden" name="incoming" value = "5" />
	<input type="submit" value="ROLL" />
</form>
</body>
</html>