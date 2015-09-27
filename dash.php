<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
</head>
<body>
	<?php  
		$my = new MySQLi('localhost','root','root','codefundo');
		$q = 'SELECT * FROM information_schema.tables WHERE table_schema="codefundo"';;
		$r = $my->query($q);
		$names = array();
		$i = 1;
		if($r){
			// print_r('Working');
			while($s = $r->fetch_object()){
				$names[$i++] = $s->TABLE_NAME;
			}
		}
	?>
	<ul>
		<li><a href="test.php">+</a></li>
		<?php 
			$i = 1;
			while(isset($names[$i])){
				echo '<li>';
				echo $names[$i++];
				echo '</li>';
			}
		 ?>
	</ul>
</body>
</html>