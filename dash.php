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
				echo '<li><a href="output.php?viewkey=';
				echo $names[$i];
				echo '">';
				echo $names[$i++];
				echo '</a></li>';
			}
		 ?>
	</ul>
</body>
</html>