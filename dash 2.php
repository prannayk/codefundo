<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<link href="build/css/metro.css" rel="stylesheet">
        <link href="build/css/metro-icons.css" rel="stylesheet">
        <link href="build/css/metro-responsive.css" rel="stylesheet">
        <link href="build/css/metro-schemes.css" rel="stylesheet">
        
        <script src="js/widgets/tile.js"></script>
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
	<div class="tile-container bg-darkCobalt" style="">
		
		<?php 
		$i = 1;
		$shit = array(1=>"cyan",2=>"green",3=>"red",4=>"magenta",5=>"darkBlue",6=>"orange",7=>"lighterBlue",8=>"yellow");
		while(isset($names[$i])){
			$inp = array_rand(shit);
			echo '<div class="tile-small bg-darkEmerald"><div class="tile-content iconic"><span class="tile-label">';
			echo $names[$i++];
			echo '</span></div></div>';
		}
	 ?>
	</div>
</body>
</html>