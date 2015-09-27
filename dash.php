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

		<li><a href="test.php">+</a></li>
	<div class="tile-container bg-darkCobalt" style="width: 640">
		
		<?php 
		$i = 1;
		while(isset($names[$i])){
			echo '<div class="tile-small-y bg-darkEmerald"><div class="tile-content iconic"><span class="tile-label">';
			echo $names[$i++];
			echo '</span></div></div>';
		}
	 ?>
	</div>
</body>
</html>