<?php 
	$mys = new MySQLi('localhost','root','root','codefundo');
	$g = $_GET['pagekey'];
	$q = "SELECT * FROM code WHERE id=".$g;
	$res = $mys->query($q) or die('fatal');
	//$print_r($res);
	// print_r($res);
	$result = array();
	if($res){
	// var_dump($q);
		while($s = $res->fetch_object()){
	//		$print_r($s['title']);
			$result['title'] =	$s->title;
			// print_r('expression');			
			$result['stylesheet'] =	$s->stylesheet;
			$result['body'] =	$s->body;
			$result['script'] =	$s->script; 
		}
	}
//	var_dump($result);
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title><?php echo $result['title']; ?></title>
 	<link rel="stylesheet" type="text/css" href="<?php echo $result['stylesheet']; ?>">
 </head>
 <body>
 	<form action="submit.php" method="POST">
 		<?php echo $result['body']; ?>
 		<input type="submit" />
 	</form>
 </body>
 </html>